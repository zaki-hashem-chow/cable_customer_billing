@extends('layouts.app')

@section('content')
    <div class="">
        <h4>Services</h4>
        <div class="row">
            <a href="{{ url('/services/create') }}" role="button" class="btn btn-primary">New Service</a>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Service ID</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Service Rate</th>
                        <th scope="col">Edit Service</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <th scope="row"> {{$service->id}} </th>
                            <td> {{$service->name}} </td>
                            <td> {{$service->rate}} </td>
                            <td> <a href="{{ url('services/'.$service->id.'/edit') }}"><button type="submit" class="btn btn-success">Edit</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="pagination" style="align-content: center;">
            {{ $services->links() }}
        </div>
    </div>
@endsection
