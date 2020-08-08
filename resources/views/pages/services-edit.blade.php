@extends('layouts.app')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <div class="row">
        <form action="{{ url('/services/'.$service->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="">
                <label for="name"></label>
            <input type="text" name="name" id="name" value="{{ $service->name }}"/>
            </div>
            <div class="">
                <label for="rate"></label>
                <input type="text" name="rate" id="rate" value="{{ $service->rate }}"/>
            </div>

            <button type="submit">Submit</button>
        </form>

        <form action= '{{ action('ServicesController@destroy', $user->id) }}' method='POST'>
            @method('DELETE')
            @csrf
            <button type="submit">Delete Service</button>
        </form>
    </div>
@endsection
