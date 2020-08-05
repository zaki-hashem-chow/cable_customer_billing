@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{ url('/user') }}" method="POST">
    @csrf

    <div>
    <input type="text" name="name" id="name"  class="form-control mb-2 mr-sm-2" placeholder='User Name' required/>
    </div>
    <div>
        <select name="type" id="type" required>
            <option value="2" selected> Customer </option>
            <option value="1"> Admin </option>
        </select>
    </div>
    <div>
        <select name="gender" id="gender" required>
            <option value="male" selected> Male </option>
            <option value="female"> Female </option>
            <option value="transgender"> Transgender </option>
        </select>
    </div>
    <div>
        <input type="date" name="dob" id="dob"  class="form-control mb-2 mr-sm-2" placeholder='Date of Birth'/>
    </div>
    <div>
        <input type="text" name="area" id="area"  class="form-control mb-2 mr-sm-2" placeholder='Area or Village' required/>
    </div>
    <div>
        <input type="text" name="street" id="street"  class="form-control mb-2 mr-sm-2" placeholder='Street or Bari' required/>
    </div>
    <div>
        <input type="text" name="address" id="address"  class="form-control mb-2 mr-sm-2" placeholder='Address'/>
    </div>
    <div>
        <input type="text" name="phone1" id="phone1"  class="form-control mb-2 mr-sm-2" placeholder='Phone Number 1' required/>
    </div>
    <div>
        <input type="text" name="phone2" id="phone2"  class="form-control mb-2 mr-sm-2" placeholder='Phone Number 2'/>
    </div>
        <div>
        <input type="email" name="email" id="email"  class="form-control mb-2 mr-sm-2" placeholder='User E-Mail'/>
    </div>
    <div>
        <input type="text" name="note" id="note"  class="form-control mb-2 mr-sm-2" placeholder='Note About User'/>
    </div>
    <div>
        <button type="submit"> Submit </button>
    </div>
</form>
