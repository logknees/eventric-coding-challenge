<?php

namespace App\Repositories;

use App\Interfaces\VenueRepositoryInterface;
use App\Models\Venues;

class VenueRepository implements VenueRepositoryInterface 
{
    public function getAllVenues() 
    {
        return Venues::all();
    }

    public function getVenueById($venueId) 
    {
        return Venues::findOrFail($venueId);
    }

    public function createVenue(array $venueDetails) 
    {
        return Venues::create($venueDetails);
    }

    public function updateVenue($venueId, array $newDetails) 
    {
        return Venues::whereId($venueId)->update($newDetails);
    }
}