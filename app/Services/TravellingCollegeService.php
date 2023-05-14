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
    
    function permuteRoute($startLatitude, $startLongitude, $collegeIds)
    {
        $colleges = College::whereIn('id', $collegeIds)->get();
        $numColleges = count($colleges);
    
        // Generate all possible permutations of college indices
        $permutations = $this->generatePermutations(range(0, $numColleges - 1));
    
        // Initialize variables to track the best route and distance
        $bestDistance = PHP_FLOAT_MAX;
        $bestRoute = [];
    
        // Iterate through each permutation
        foreach ($permutations as $permutation) {
            $distance = 0;
            $route = [];
    
            // Calculate the distance from the starting location to the first college
            $distance += $this->calculateDistance(
                $startLatitude,
                $startLongitude,
                $colleges[$permutation[0]]->latitude,
                $colleges[$permutation[0]]->longitude
            );
    
            // Calculate the distance between each pair of colleges in the permutation
            for ($i = 0; $i < $numColleges - 1; $i++) {
                $source = $colleges[$permutation[$i]];
                $destination = $colleges[$permutation[$i + 1]];
                $distance += $this->calculateDistance(
                    $source->latitude,
                    $source->longitude,
                    $destination->latitude,
                    $destination->longitude
                );
            }
    
            // Update the best route and distance if the current permutation yields a shorter distance
            if ($distance < $bestDistance) {
                $bestDistance = $distance;
                $bestRoute = array_map(function ($index) use ($colleges) {
                    return $colleges[$index];
                }, $permutation);
            }
        }
    
        return [
            'route' => $bestRoute,
            'total_distance' => $bestDistance,
        ];

    }


    function generatePermutations($items, $perms = [], &$result = [])
    {
        if (empty($items)) {
            $result[] = $perms;
        } else {
            for ($i = count($items) - 1; $i >= 0; --$i) {
                $newItems = $items;
                $newPerms = $perms;
                list($foo) = array_splice($newItems, $i, 1);
                array_unshift($newPerms, $foo);
                $this->generatePermutations($newItems, $newPerms, $result);
            }
        }

        return $result;
    }
    

    
    
    
}
