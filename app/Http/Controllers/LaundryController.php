<?php

namespace App\Http\Controllers;

use App\Models\DetailLaundry;
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
        $customer_id = $request->customer_id;
        $discount = $request->discount || 0;
        $total_price = $request->price - ($request->price * 0/100);

        $newLaundry = Laundry::create([
            'user_id' => $request->user_id,
            'customer_id' => $request->customer_id,
            'duration_id' => $request->duration_id,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
            'price' => $request->price,
            'discount' => $discount,
            'total_price' => $total_price,
            'total_pay' => $request->total_pay,
            'status_pay' => ($request->status_pay || 0),
            'notes' => $request->notes
        ]);

        $newLaundryId = $newLaundry->id;

        foreach($request->listDetail as $detail) {
            DetailLaundry::create([
                'laundry_id' => $newLaundryId,
                'type_laundry_id' => $detail['type_laundry_id'],
                'quantity' => $detail['quantity']
            ]);
        }

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
