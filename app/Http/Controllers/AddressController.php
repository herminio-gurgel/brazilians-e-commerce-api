<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Address::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AddressResource::collection(auth()->user()->addresses()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAddressRequest $request)
    {
        $address = $request->user()->addresses()->create($request->validated());
        return AddressResource::make($address);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return AddressResource::make($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->validated());

        return AddressResource::make($address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return response()->noContent();
    }
}
