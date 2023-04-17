<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getData(Request $request)
    {
        if(!$request) {
            $data = Customer::limit(10);
        } else {
            $data = Customer::where('name', 'LIKE', '%'.$request.'%')->limit(10);
        }
        return response()->json([
            'id' => $data->id,
            'name' => $data->name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Add new customer
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'address' => ['required']
        ]);
        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
        $customer = $request->only('name', 'address');
        try {
            Customer::make($customer);
            return response()->json([
                'success' => true,
                'message' => 'Berhasil tambah pelanggan'
            ]);
        } catch(Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Customer::find($id);
        return response()->json([
            'id' => $data->id,
            'name' => $data->name,
            'address' => $data->address,
        ]);
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
}
