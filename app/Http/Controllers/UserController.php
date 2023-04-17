<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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

    /**
     * Controller for User Role Customer
     */

     /**
      * Show list customer
      */
    public function showCustomer(Request $request)
    {

    }

    /**
     * Add new customer
     */
    public function addCustomer(Request $request)
    {
        if(in_array(Auth::user()->role, ['admin', 'kasir'])) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak punya akses'
            ], 403);
        }
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
        $customer = [
            'name' => $request->name,
            'address' => $request->address,
            'role' => 'customer'
        ];
        try {
            User::create($customer);
            return response()->json([
                'success' => true,
                'message' => 'Sukses menambahkan pelanggan baru'
            ]);
        } catch(Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }
}
