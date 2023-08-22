<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view('hotels.create', ['rooms' => $rooms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());
        $hotel->room_id = $request->room_id;
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->save();
        return redirect()->route('hotels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotels = Hotel::find($id);
        return view('hotels.show', compact('hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotels = Hotel::find($id);
        $rooms = Room::all();
        return view('hotels.edit', compact('hotels', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->room_id = $request->room_id;
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->save();
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
