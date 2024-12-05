<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $hotels = Hotel::all(); //paginate();

        return HotelResource::collection($hotels);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HotelRequest $request): Hotel
    {
        return Hotel::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel): Hotel
    {
        return $hotel;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HotelRequest $request, Hotel $hotel): Hotel
    {
        $hotel->update($request->validated());

        return $hotel;
    }

    public function destroy(Hotel $hotel): Response
    {
        $hotel->delete();

        return response()->noContent();
    }
}
