@extends('layouts.app')

@section('content')
<div class="row">
    <form action="{{ url('/customer-services') }}" method="POST">
        @csrf
        <h3>Customer New Service</h3>
        <input type="hidden" name="user-id" value="{{ Auth::user()->id }}" />
        <div class="form-group">
            <label for="id">Service Name</label>
            <select name="id" id="id" class="form-control"">
                @foreach($services as $service)
                    <option value="{{ $service->id }}"> {{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="discount">Discount Amount</label>
            <input type="text" name="discount" id="discount" class="form-control" placeholder="Regular Discount rate" />
        </div>
        <div class="form-group">
            <label for="start-date">Service Start date</label>
            <input type="date" name="start-date" id="start-date" class="form-control" placeholder="Service Starting Date" />
        </div>
        <div class="form-group">
            <label for="status">Service Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
                <option value="3">Cancele</option>
            </select>
        </div>
        <div class="form-group">
            <label for="billing-date">Monthly Billing date</label>
            <input type="text" name="billing-date" id="billing-date" class="form-control" placeholder="Monthly Billing Date" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection






