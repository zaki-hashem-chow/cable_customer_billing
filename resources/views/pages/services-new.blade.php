@extends('layouts.app')

@section('content')
    <h4>Add new Service</h4>
    <div class="row">
        <form action="{{ url('/services') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" name="name" id="id" placeholder="Service Name"/>
            </div>
            <div class="form-group">
                <label for="rate"></label>
                <input type="text" class="form-control" name="rate" id="id" placeholder="Service Rate"/>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
