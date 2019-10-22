<?php

namespace App\Http\Controllers;

use App\Sindams;
use Illuminate\Http\Request;

class SindamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sindam');
    }
    
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sindams  $sindams
     * @return \Illuminate\Http\Response
     */
    public function show(Sindams $sindams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sindams  $sindams
     * @return \Illuminate\Http\Response
     */
    public function edit(Sindams $sindams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sindams  $sindams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sindams $sindams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sindams  $sindams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sindams $sindams)
    {
        //
    }
}
