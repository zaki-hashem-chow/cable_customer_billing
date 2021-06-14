<?php

namespace App\Http\Controllers;

use App\CustomerService;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.customer-services', ['customer_services' => CustomerService::where('user_id', Auth::id())->get(), 'services' => Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer-services-new', ['services' => Service::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user-id' => 'required|max:20|numeric',
            'id' => 'required|max:20|numeric',
            'discount' => 'max:99999999999|numeric',
            'start-date' => 'required|max:12|date',
            'status' => 'required|max:2|numeric',
            'billing-date' =>   'required|max:2|string',
        ]);

        $CustomerService = new CustomerService;
        $CustomerService->user_id = $request->input('user-id');
        $CustomerService->services_id = $request->input('id');
        $CustomerService->discount = $request->input('discount');
        $CustomerService->connection_status = $request->input('status');
        $CustomerService->service_start_date = $request->input('start-date');
        $CustomerService->billing_date = $request->input('billing-date');

        $CustomerService->save();

        return redirect('/cusromer-services')->with('message', 'New service saved for Customer successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id as user ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer_services = CustomerService::find($id);

        if (empty($customer_services)) {
            return redirect('/customer-services/create');
        }

        return view('pages.customer-services', ['customer_services' => CustomerService::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!is_numeric($id)) {
            return Redirect::back()->withErrors('msg', 'Illeagal service ID submited.');
        }

        return view('pages.customer-services-edit', ['service' => CustomerService::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|max:20|numeric',
            'discount' => 'max:99999999999|numeric',
            'start-date' => 'required|max:12|date',
            'status' => 'required|max:2|numeric',
            'billing-date' =>   'required|max:2|string',
        ]);

        $CustomerService = CustomerService::find($request->input('id'));

        $CustomerService->discount = $request->input('discount');
        $CustomerService->connection_status = $request->input('status');
        $CustomerService->service_start_date = $request->input('start-date');
        $CustomerService->billing_date = $request->input('type');

        $CustomerService->save();

        return redirect('/cusromer-services')->with('message', 'New service saved for Customer successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerServices  $customerServices
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
