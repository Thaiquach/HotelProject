<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Hotel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Booking::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::all();
        $customers = Customer::all();
        return view('books.create', compact('customers'), compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Booking::create($request->all());
        $book->hotel_id = $request->hotel_id;
        $book->customer_id = $request->customer_id;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Booking::find($id);
        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Booking::find($id);
        $hotels = Hotel::all();
        $customers = Customer::all();
        return view('books.edit', compact('books', 'hotels', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Booking::find($id);
        $book->hotel_id = $request->hotel_id;
        $book->customer_id = $request->customer_id;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Booking::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
