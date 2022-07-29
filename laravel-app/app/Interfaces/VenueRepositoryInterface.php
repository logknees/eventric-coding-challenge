<?php

namespace App\Interfaces;

interface VenueRepositoryInterface 
{
    public function getAllVenues();
    public function getVenueById($venueId);
    public function createVenue(array $venueDetails);
    public function updateVenue($venueId, array $newDetails);
}
