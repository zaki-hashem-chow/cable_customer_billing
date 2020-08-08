<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $model)
    {
        return view('pages.services', ['services' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.services-new');
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
            'name' => 'required|max:255|string',
            'rate' => 'required|max:999999999|numeric',
        ]);

        $service = new Service;

        $service->name = $request->input('name');
        $service->rate = $request->input('rate');

        $service->save();

        return redirect('/services')->with('message', 'New service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!is_numeric($id)) {
            return Redirect::back()->withErrors('msg', 'Illeagal service ID submited.');
        }

        return view('pages.services-edit', ['service' => Service::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'rate' => 'required|max:99999999.99|numeric',
        ]);

        if (!is_numeric($id)) {
            return Redirect::back()->withErrors('msg', 'Illeagal user ID submited.');
        }

            $service = Service::find($id);

            $service->name= $request->input('name');
            $service->rate= $request->input('rate');

            $service->save();

        return redirect('/services')->with('message', 'Service data changed was successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->delete();

        return redirect('/services')->with('message', 'Service was successfully Deleted.');
    }
}
