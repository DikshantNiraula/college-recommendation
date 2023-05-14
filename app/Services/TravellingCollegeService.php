<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

use App\Models\College;

class TravellingCollegeService
{
    
    function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // in kilometers
    
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
    
        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLon / 2) * sin($dLon / 2);
    
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        $distance = $earthRadius * $c;
    
        return $distance;
    }

    function findOptimalRoute($startLatitude, $startLongitude, $collegeIds)
    {
        $colleges = College::whereIn('id', $collegeIds)->get();
    
        $currentLatitude = $startLatitude;
        $currentLongitude = $startLongitude;
    
        $visited = [];
        $route = [];
        $collegeDetails = [];
        $totalDistance = 0;
        $distances = [];
    
        while (count($visited) < count($collegeIds)) {
            $minDistance = PHP_FLOAT_MAX;
            $nearestCollegeId = null;
    
            foreach ($colleges as $college) {
                if (!in_array($college->id, $visited)) {
                    $distance = $this->calculateDistance($currentLatitude, $currentLongitude, $college->latitude, $college->longitude);
    
                    if ($distance < $minDistance) {
                        $minDistance = $distance;
                        $nearestCollegeId = $college->id;
                    }
                }
            }
    
            $visited[] = $nearestCollegeId;
            $route[] = $nearestCollegeId;
            $collegeDetails[] = $colleges->find($nearestCollegeId);
    
            if (count($visited) === 1) {
                // Calculate distance between user and first college
                $distances[] = $minDistance;
            } else {
                // Calculate distance between consecutive colleges
                $previousCollegeId = $route[count($route) - 2];
                $previousCollege = $colleges->find($previousCollegeId);
                $distance = $this->calculateDistance(
                    $previousCollege->latitude,
                    $previousCollege->longitude,
                    $colleges->find($nearestCollegeId)->latitude,
                    $colleges->find($nearestCollegeId)->longitude
                );
                $distances[] = $distance;
            }
    
            $totalDistance += $minDistance;
    
            $currentLatitude = $colleges->find($nearestCollegeId)->latitude;
            $currentLongitude = $colleges->find($nearestCollegeId)->longitude;
        }
    
        return [
            'route' => $route,
            'collegeDetails' => $collegeDetails,
            'totalDistance' => $totalDistance,
            'distances' => $distances,
        ];
    }
    
    
    
    
}
