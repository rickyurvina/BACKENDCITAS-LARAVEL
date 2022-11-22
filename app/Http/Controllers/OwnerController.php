<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreOwnerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
        $owner = Owner::whereHas('appointments', function ($q) {
            $q->where('phone', '==', '222');
        })->where('code', '!=', null)->get();

        $pedidos = Pedido::whereHas('products', function ($q) {
            $q->where('name', '==', 'Hamburguesa');
        })->get();
        $pedidosArr = [];
        foreach ($pedidos as $pedido) {
            $producto = $pedido->product;
            $nameProduct = $producto->name;
            $cost = $producto->cost;
            $element = [];
            $element['name'] = $nameProduct;
            $element['cost'] = $cost;
            $pedidosArr = array_push($element);
        }

        return response()->json($pedidos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateOwnerRequest $request
     * @param \App\Models\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
