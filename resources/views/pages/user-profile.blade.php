@extends('layouts.app')

@section('content')

<h4> {{ $user->name }} </h4>
<div>
Customer ID: {{ $user->id }}
</div>
<div>
<div>
Gender: {{ $user->gender }}
</div>
<div>
Age: {{ $user->dob }}
</div>
<div>
Area: {{ $user->area }}
</div>
<div>
Street: {{ $user->street }}
</div>
<div>
Address: {{ $user->address }}
</div>
<div>
Phone-1: {{ $user->phone_num_1 }}
</div>
<div>
Phone-2: {{ $user->phone_num_2 }}
</div>
<div>
E-mail: {{ $user->email }}
</div>
<div>
Note: {{ $user->note }}
</div>

<a href="{{ url('/user/'.$user->id.'/edit') }}"> <button type="submit" class="btn btn-primary">Edit Customer Info</button></a>

@endsection
