@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ url('/services') }}" method="POST">
            @csrf
            <div class="">
                <label for="name"></label>
                <input type="text" name="name" id="id" placeholder="Service Name"/>
            </div>
            <div class="">
                <label for="rate"></label>
                <input type="text" name="rate" id="id" placeholder="Service Rate"/>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
