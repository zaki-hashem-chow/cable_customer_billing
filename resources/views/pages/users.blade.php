@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')

    <form method="POST" action="/user">
            @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="sr-only">Customer Name or ID </label>
                <input type="text" name="nameorid" id="name"  class="form-control mb-2 mr-sm-2" placeholder="customer id or name"/>
            </div>
            <div class="col-md-3">
                <label for="filter" class="sr-only">Filter customers</label>
                <select name="filter" id="filter" class="form-control">
                    <option value="" disabled selected>filter</option>
                    <option value="area">Area</option>
                    <option value="bari">Bari/Street</option>
                    {{-- <option value="service name">Servise name</option> --}}
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </div>

    </form>

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
                    <td><a href="/user&id:{{ $user->id }}"><button class="btn btn-primary">Profile</button></a></td>
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
