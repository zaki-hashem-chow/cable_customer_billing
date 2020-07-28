<?php

namespace App\Http\Controllers;

use App\CustomerServices;
use Illuminate\Http\Request;

class CustomerServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.customer-services');
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
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerServices $customerServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerServices $customerServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerServices $customerServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerServices $customerServices)
    {
        //
    }
}
