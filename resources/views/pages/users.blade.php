@extends('layouts.app')

@section('content')

    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif

@if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif

    <form method="POST" action="{{ url('/user/search/')}}">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="sr-only">Customer Name or ID </label>
                <input type="text" name="nameorid" id="name"  class="form-control mb-2 mr-sm-2" placeholder="customer id or name"/>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <form method="POST" action="{{ url('/user/filter/')}}">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="area" class="sr-only">Filter by Area/Village</label>
                <select name="area" id="area" class="form-control">
                    <option value="" disabled selected>Filter by Area/Village</option>
                    @foreach ($areas as $area)
                         <option value="{{$area->area}}">{{$area->area}}</option>
                    @endforeach
                    {{-- <option value="service name">Servise name</option> --}}
                </select>
            </div>
            <div class="col-md-3">
                <label for="street" class="sr-only">Filter by Street/Bari</label>
                <select name="street" id="street" class="form-control">
                    <option value="" disabled selected>Filter by Street/Bari</option>
                    @foreach ($streets as $street)
                         <option value="{{$street->street}}">{{$street->street}}</option>
                    @endforeach

                    {{-- <option value="service name">Servise name</option> --}}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
<a href="{{ url('/user') }}"><button type="submit" class="btn btn-primary">Reset Search/Filter</button></a>
     <div class="row">
        <a href="{{ url('/user/create') }}"><button type="submit" class="btn btn-primary">Add New Customer</button></a>
     </div>



    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Area</th>
                    <th scope="col">View Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dob }}</td> <!-- calculate age-->
                    <td>{{ $user->area }}</td>
                    <td><a href="{{ url('user/'.$user->id) }}"><button type="submit" class="btn btn-primary">Profile</button></a></td>
                  <!--generate button with id-->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div style="align-content: center;">
            {{ $users->links() }}
        </div>
    </div>
@endsection
