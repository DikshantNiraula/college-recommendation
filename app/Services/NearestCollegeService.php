<?php

namespace App\Services;

use App\Models\College;

class NearestCollegeService
{
    public function getNearestColleges($locationData)
    {
        // Parse the location data
        $location = $locationData;

        // Retrieve colleges from the database
        $colleges = College::all();

        // Calculate the distances for all colleges
        $collegesWithDistances = [];

        foreach ($colleges as $college) {
            $collegeLatitude = $college->latitude;
            $collegeLongitude = $college->longitude;

            $distance = $this->calculateDistance(
                $location['latitude'],
                $location['longitude'],
                $collegeLatitude,
                $collegeLongitude
            );
            $distance = round($distance, 3);
            $college->distance = $distance;
            $collegesWithDistances[] = $college;
        }

        // Sort the colleges by distance in ascending order
        usort($collegesWithDistances, function ($a, $b) {
            return $a->distance <=> $b->distance;
        });

        return $collegesWithDistances;
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Radius of the Earth in kilometers

        // Convert latitude and longitude to radians
        $lat1Rad = deg2rad($lat1);
        $lon1Rad = deg2rad($lon1);
        $lat2Rad = deg2rad($lat2);
        $lon2Rad = deg2rad($lon2);

        // Calculate the differences between the latitudes and longitudes
        $latDiff = $lat2Rad - $lat1Rad;
        $lonDiff = $lon2Rad - $lon1Rad;

        // Apply the Haversine formula
        $a = sin($latDiff / 2) * sin($latDiff / 2) +
            cos($lat1Rad) * cos($lat2Rad) *
            sin($lonDiff / 2) * sin($lonDiff / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        // Calculate the distance
        $distance = $earthRadius * $c;

        return $distance;
    }
}
