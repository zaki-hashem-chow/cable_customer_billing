<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        if(empty($company)){
            return redirect('/company/create');
        }

        return view('pages.company', ['company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.company-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'address' => 'required|max:255|string',
            'phone1' => 'required|max:255|string',
            'phone2' => 'required|max:255|string',
            'bkash1' => 'required|max:255|string',
            'bkash2' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'website' => 'required|max:255|string',
            'fileserver' => 'required|max:255|string',
        ]);

        if(!is_null(Company::all())){

        }

        $company = new Company;
            $company->name = $request->input('name');

            if(!is_null($request->logo)){
                $path = $request->logo->store('images', 'public');
                $company->logo = $path;

                return redirect('/company')->with('message', 'Company Data Already exists. No more then One Own Company Data can be saved in this virsion.');
            }

            $company->address = $request->input('address');
            $company->phone_num_1 = $request->input('phone1');
            $company->phone_num_2 = $request->input('phone2');
            $company->bkash_1 = $request->input('bkash1');
            $company->bkash_2 = $request->input('bkash2');
            $company->email = $request->input('email');
            $company->website = $request->input('website');
            $company->file_server = $request->input('fileserver');

            $company->save();

        return redirect('/company')->with('message', 'Company Data saved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (is_numeric($id)) {

            return view('pages.company-edit', ['company' => Company::first()]);
        }
        return Redirect::back()->withErrors('msg', 'Illeagal user ID submited.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'address' => 'required|max:255|string',
            'phone1' => 'required|max:255|string',
            'phone2' => 'required|max:255|string',
            'bkash1' => 'required|max:255|string',
            'bkash2' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'website' => 'required|max:255|string',
            'fileserver' => 'required|max:255|string',
        ]);


        $company = Company::find($id);

        $company->name = $request->input('name');

        if (!is_null($request->logo)) {
            $path = $request->logo->store('images', 'public');
            $company->logo = $path;
        }

        $company->address = $request->input('address');
        $company->phone_num_1 = $request->input('phone1');
        $company->phone_num_2 = $request->input('phone2');
        $company->bkash_1 = $request->input('bkash1');
        $company->bkash_2 = $request->input('bkash2');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->file_server = $request->input('fileserver');

        $company->save();

        return redirect('/company')->with('message', 'Company Data saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::where('id', $id)->delete();

        return redirect('/company')->with('message', 'Company was successfully Deleted.');
    }
}
