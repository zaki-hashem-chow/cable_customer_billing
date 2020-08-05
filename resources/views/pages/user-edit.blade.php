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



<form action="{{ url('/user/'.$user->id) }}" method="POST">
    @method('PUT')
    @csrf

    <div>
    <input type="text" name="name" id="name"  class="form-control mb-2 mr-sm-2" value='{{ $user->name }}' required/>
    </div>
    <div>
        <select name="type" id="type" required>
            <option value="2" <?php if($user->type == '2'){echo "selected";} ?>> Customer </option>
            <option value="1" <?php if($user->type == '1'){echo "selected";} ?>> Admin </option>
        </select>
    </div>
    <div>
        <select name="gender" id="gender" required>
            <option value="male" <?php if($user->gender == 'male'){echo "selected";} ?>> Male </option>
            <option value="female" <?php if($user->gender == 'female'){echo "selected";} ?>> Female </option>
            <option value="transgender" <?php if($user->gender == 'transgender'){echo "selected";} ?>> Transgender </option>
        </select>
    </div>
    <div>
    <input type="date" name="dob" id="dob"  class="form-control mb-2 mr-sm-2" value='{{ $user->dob }}'/>
    </div>
    <div>
        <input type="text" name="area" id="area"  class="form-control mb-2 mr-sm-2"  value='{{ $user->area }}' required/>
    </div>
    <div>
        <input type="text" name="street" id="street"  class="form-control mb-2 mr-sm-2"  value='{{ $user->street }}' required/>
    </div>
    <div>
        <input type="text" name="address" id="address"  class="form-control mb-2 mr-sm-2"  value='{{ $user->address }}' />
    </div>
    <div>
        <input type="text" name="phone1" id="phone1"  class="form-control mb-2 mr-sm-2"  value='{{ $user->phone_num_1 }}' required/>
    </div>
    <div>
        <input type="text" name="phone2" id="phone2"  class="form-control mb-2 mr-sm-2" value='{{ $user->phone_num_2 }}'/>
    </div>
        <div>
        <input type="email" name="email" id="email"  class="form-control mb-2 mr-sm-2" value='{{ $user->email }}'/>
    </div>
    <div>
        <textarea id="w3review" name="w3review" rows="4" cols="70">{{ $user->note }}</textarea>
    </div>
    <div>
        <button type="submit"> Save </button>
    </div>
</form>

