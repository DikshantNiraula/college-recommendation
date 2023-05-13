<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

use App\Models\College;

class TravellingCollegeService
{
    private $bestRoute;

    public function findBestRoute($collegeIds, $userLatitude, $userLongitude)
    {
        $colleges = College::whereIn('id', $collegeIds)->get();
        $userLocation = ['college_id' => 0, 'latitude' => $userLatitude, 'longitude' => $userLongitude];
        $distances = $this->calculateDistances($colleges, $userLocation);
    
        $tree = [];
        $this->traverseTreeDFS($tree, $userLocation, $distances, $colleges->toArray(), [], 0);
    
        return $this->bestRoute;
    }
    
    private function traverseTreeDFS($tree, $currentLocation, $distances, $colleges, $path, $totalDistance)
    {
        // Add current location to the path
        $path[] = $currentLocation;
    
        // If all colleges have been visited, check if the current path is the best route
        if (count($path) - 1 === count($colleges)) {
            $totalDistance += $distances[$currentLocation['college_id']];
    
            // If the current path is shorter than the best route, update the best route
            if ($this->bestRoute === null || $totalDistance < $this->bestRoute['distance']) {
                $this->bestRoute = [
                    'path' => $path,
                    'distance' => $totalDistance
                ];
            }
    
            return;
        }
    
        // Find the colleges that haven't been visited yet
        $unvisitedColleges = array_diff(array_column($colleges, 'id'), array_column($path, 'college_id'));
    
        // Iterate over the unvisited colleges
        foreach ($unvisitedColleges as $collegeId) {
            $college = $colleges[array_search($collegeId, array_column($colleges, 'id'))];
            $distanceToCollege = $distances[$collegeId];
            $totalDistance += $distanceToCollege;
    
            // Set the current college ID in the location array
            $currentLocation['college_id'] = $collegeId;
    
            // Recursive call to visit the next college
            $this->traverseTreeDFS($tree, $currentLocation, $distances, $colleges, $path, $totalDistance);
    
            // Backtrack: remove the current college from the path and subtract its distance
            array_pop($path);
            $totalDistance -= $distanceToCollege;
        }
    }
    
    

    private function calculateDistances($colleges, $userLocation)
    {
        $distances = [];
    
        foreach ($colleges as $college) {
            $collegeId = $college['id'];
    
            if (!isset($college['latitude']) || !isset($college['longitude'])) {
                continue;
            }
    
            $collegeLocation = [
                'latitude' => $college['latitude'],
                'longitude' => $college['longitude'],
            ];
    
            $distanceToCollege = $this->calculateDistance($userLocation, $collegeLocation);
    
            $distances[$collegeId] = $distanceToCollege;
        }
    
        return $distances;
    }
    

    private function calculateDistance($location1, $location2)
    {
        $latitude1 = deg2rad($location1['latitude']);
        $longitude1 = deg2rad($location1['longitude']);
        $latitude2 = deg2rad($location2['latitude']);
        $longitude2 = deg2rad($location2['longitude']);
    
        $earthRadius = 6371; // Radius of the Earth in kilometers
    
        $deltaLatitude = $latitude2 - $latitude1;
        $deltaLongitude = $longitude2 - $longitude1;
    
        $angle = 2 * asin(sqrt(
            pow(sin($deltaLatitude / 2), 2) +
            cos($latitude1) * cos($latitude2) * pow(sin($deltaLongitude / 2), 2)
        ));
    
        $distance = $angle * $earthRadius;
    
        return $distance;
    }

    
}
