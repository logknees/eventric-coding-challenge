<?php

namespace App\Http\Controllers;

use App\Interfaces\VenueRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VenueController extends Controller 
{
    
    private $venueRepository;

    public function __construct(VenueRepositoryInterface $venueRepository) 
    {
        $this->venueRepository = $venueRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->venueRepository->getAllVenues()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {

        $venueDetails = $request->validate([
            'name' => 'required',
            'point_of_contact_email' => 'email:rfc,dns',
            'point_of_contact_phone' => 'max:30',
            'country' => 'required',
        ]);

        return response()->json(
            [
                'data' => $this->venueRepository->createVenue($venueDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $venueId = $request->route('id');

        return response()->json([
            'data' => $this->venueRepository->getVenueById($venueId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $venueId = $request->route('id');
        $validated = $request->validate([
            'name' => '',
            'point_of_contact_email' => 'email:rfc,dns',
            'point_of_contact_phone' => 'max:30',
            'country' => '',
        ]);
            
        $venueDetails = $validated;

        return response()->json([
            'data' => $this->venueRepository->updateVenue($venueId, $venueDetails)
        ]);
    }
}
