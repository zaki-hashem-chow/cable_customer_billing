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
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}"/>
            </div>
            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="text" name="rate" id="rate" class="form-control" value="{{ $service->rate }}"/>
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="text" name="discount" id="discount" class="form-control"  value="{{ $service->discount }}" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <form action= '{{ action('ServicesController@destroy', $service->id) }}' method='POST'>
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete Service</button>
        </form>
    </div>
@endsection
