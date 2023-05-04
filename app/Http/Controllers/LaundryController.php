<?php

namespace App\Http\Controllers;

use App\Models\DurationLaundry;
use App\Models\Laundry;
use App\Models\TypeCloth;
use App\Models\TypeLaundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambahTransaksi()
    {
        return view('pages.tambah-transaksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $customer_id = $request->customer;

        Laundry::create([
            'user_id' => '',
            'customer_id' => $customer_id,
            'duration_id' => ''
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getTypeLaundry()
    {
        $data = TypeLaundry::select('id', 'name')->get();
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function getTypeCloth()
    {
        $data = TypeCloth::select('id', 'name')->get();
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getDurationLaundry()
    {
        $data = DurationLaundry::select('id', 'name')->get();
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }
}
