<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Http\Requests\StoreDetailOrderRequest;
use App\Http\Requests\UpdateDetailOrderRequest;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = DetailOrder::all();
        return response()->json($details);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetailOrderRequest $request)
    {
        $detailOrder = DetailOrder::create($request->all());
        return response()->json($detailOrder, 201);
    }

    public function show($id)
    {
        $detail = DetailOrder::with('order', 'products')->findOrFail($id);
        return response()->json($detail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailOrderRequest $request, DetailOrder $detailOrder)
    {
        //
    }
}
