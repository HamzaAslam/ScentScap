<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ProductlistRightModel;
use Illuminate\Http\Request;

class ProductlistRightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.productlistright');
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
    public function show(ProductlistRightModel $productlistRightModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductlistRightModel $productlistRightModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductlistRightModel $productlistRightModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductlistRightModel $productlistRightModel)
    {
        //
    }
}
