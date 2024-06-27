<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('amenities', 'images')->get();
        return view('index', compact('rooms'));
    }

    public function rooms()
    {
        $rooms = Room::with('amenities', 'images')->get();
        return view('room', compact('rooms'));
    }
    public function show($id)
    {
        $roomdetails = Room::with('amenities', 'images', 'bookings')->findOrFail($id);
        return view('room_details', compact('roomdetails'));
    }

}
