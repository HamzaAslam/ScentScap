<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ShoppingModel;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.shopping');
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
    public function show(ShoppingModel $shoppingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShoppingModel $shoppingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShoppingModel $shoppingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShoppingModel $shoppingModel)
    {
        //
    }
}
