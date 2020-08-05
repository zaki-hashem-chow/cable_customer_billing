<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model, $success = null)
    {
        $user =  User::all();

        return view('pages.users', [
            'users' => $model->paginate(15),
            'areas' => $user->unique('area')->sortBy('area'),
            'streets' => $user->unique('street')->sortBy('street')
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user-new');
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
            'dob' => 'required|date',
            'gender' => 'nullable|max:12|string',
            'type' => 'required|max:2|numeric',
            'area' =>   'required|max:255|string',
            'street'=>  'required|max:255|string',
            'address' => 'nullable|max:255|string',
            'phone1' => 'required|max:9999999999999999|numeric',
            'phone2' => 'nullable|max:9999999999999999|numeric',
            'email' => 'nullable|email|max:50',
            'note' => 'nullable|max:255|string',
        ]);

        $user = new User;

        $user->name = $request->input('name');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->type = $request->input('type');
        $user->area = $request->input('area');
        $user->street = $request->input('street');
        $user->address = $request->input('address');
        $user->phone_num_1 = $request->input('phone1');
        $user->phone_num_2 = $request->input('phone2');
        $user->email = $request->input('email');
        $user->note = $request->input('note');

        $user->save();

        return redirect('/user')->with('message', 'New user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $model, $id)
    {
        if(is_numeric($id)){

            return view('pages.user-profile', ['user' => User::find($id)]);
        }
        return Redirect::back()->withErrors('msg', 'Illeagal user ID submited.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!is_numeric($id)){
            return Redirect::back()->withErrors('msg', 'Illeagal user ID submited.');
        }

        return view('pages.user-edit', ['user' => $user = User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'dob' => 'required|date',
            'gender' => 'nullable|max:12|string',
            'type' => 'required|max:2|numeric',
            'area' =>   'required|max:255|string',
            'street' =>  'required|max:255|string',
            'address' => 'nullable|max:255|string',
            'phone1' => 'required|max:9999999999999999|numeric',
            'phone2' => 'nullable|max:9999999999999999|numeric',
            'email' => 'nullable|email|max:50',
            'note' => 'nullable|max:255|string',
        ]);

        if (!is_numeric($id)) {
            return Redirect::back()->withErrors('msg', 'Illeagal user ID submited.');
        }

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->type = $request->input('type');
        $user->area = $request->input('area');
        $user->street = $request->input('street');
        $user->address = $request->input('address');
        $user->phone_num_1 = $request->input('phone1');
        $user->phone_num_2 = $request->input('phone2');
        $user->email = $request->input('email');
        $user->note = $request->input('note');

        $user->save();

        return redirect('/user')->with('message', 'User data was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User:: where('id', $id)->delete();

        return redirect('/user')->with('message', 'User was successfully Deleted.');
    }

    /**
     * Return Search result for specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'nameorid' => 'required|max:255|string',
        ]);

        $search= $request->input('nameorid');

        if(!empty(User::find($search))){ ////if not working as expected

            $users = User::find($search);

        }
        elseif(User::where('name', $search)->first()){

            $users = User::where('name', $search)->paginate(15);

        }else{

            return redirect('/user')->with('message', 'Your Searched text did not match any stored user ID or Name!');
        }

        $user =  User::all();

        return view('pages.users', ['users' => $users,
                                    'areas' => $user->unique('area')->sortBy('area'),
                                    'streets' => $user->unique('street')->sortBy('street')]);
    }


    /**
     * Return Filtered result for the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $request->validate([
            'area' => 'max:255|string',
            'street' => 'max:255|string',
        ]);

        $area = $request->input('area');
        $street = $request->input('street');

        if ($area !== null && $street !== null) {

            $users = User::where('area', $area)
                        ->where('street', $street);

        }elseif($area !== null){

            $users = User::where('area', $area);

        }elseif($street !== null){

            $users = User::where('street', $street);
        }else{
            return redirect('/user')->with('message', 'Your Filter did not match with any user data!');
        }

        $user = User::all();

        return view('pages.users', [
            'users' => $users->paginate(15),
            'areas' => $user->unique('area')->sortBy('area'),
            'streets' => $user->unique('street')->sortBy('street')
        ]);
    }
}
