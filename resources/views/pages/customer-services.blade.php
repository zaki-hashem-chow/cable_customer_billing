@extends('layouts.app')

@section('content')
    <div class="row">


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Customer Service ID</th>
                    <th scope="col">Service name</th>
                    <th scope="col">Service rate</th>
                    <th scope="col"> Discount</th>
                    <th scope="col">Service Start date</th>
                    <th scope="col">Service status</th>
                    <th scope="col">Billing date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer_services as $customer_service)
                    <tr>
                        <th scope="row">{{ $customer_service->id }}</th>
                        <td>{{ $services->firstWhere('id', $customer_service->services_id)->name }}</td>
                        <td>Tk-{{ $services->firstWhere('id', $customer_service->services_id)->rate }}</td>
                        <td>Tk-{{ $customer_service->discount }}</td>
                        <td>Tk-{{ $customer_service->service_start_date }}</td>
                        <td>Tk-{{ $customer_service->connection_status }}</td>
                        <td>Tk-{{ $customer_service->billing_date }}</td>
                        <td><a href="{{ url('customer-services/'.$customer_service->id.'/edit') }}"><button type="submit" class="btn btn-success">Edit</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
