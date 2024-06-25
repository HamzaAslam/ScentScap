<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\BloglistModel;
use Illuminate\Http\Request;

class BloglistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.bloglist');
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
    public function show(BloglistModel $bloglistModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BloglistModel $bloglistModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BloglistModel $bloglistModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BloglistModel $bloglistModel)
    {
        //
    }
}
