@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="row">
            <a href="{{ url('/services/create') }}"><button>Add New Service</button></a>
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Service ID</th>
                        <th>Service Name</th>
                        <th>Service Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td> {{$service->id}} </td>
                            <td> {{$service->name}} </td>
                            <td> {{$service->rate}} </td>
                            <td> <a href="{{ url('services/'.$service->id.'/edit') }}"><button type="submit">Edit</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div style="align-content: center;">
            {{ $services->links() }}
        </div>
    </div>
@endsection
