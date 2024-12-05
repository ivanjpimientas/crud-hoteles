<?php

namespace App\Http\Controllers\Api;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoomResource;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id_hotel = $request->query('idhotel');
        if (!is_null($id_hotel)) 
            $rooms = Room::where('id_hotel', $id_hotel)->get();
        else
            $rooms = Room::all(); //paginate();

        return RoomResource::collection($rooms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request): Room
    {
        return Room::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room): Room
    {
        return $room;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room): Room
    {
        $room->update($request->validated());

        return $room;
    }

    public function destroy(Room $room): Response
    {
        $room->delete();

        return response()->noContent();
    }
}
