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

    <div class="row">
        <div class="col-sm-9">
            <h3>Edit Company Information</h3>
            <form action="{{ url('/company/'.$company->id )}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="fileserver"> Upload Company Logo</label>
                    <input type="file" name='logo' id="logo" class="form-control-file" value="{{ $company->logo }}"/>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name='name' id="name" class="form-control" value="{{ $company->name }}"/>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name='address' id="address" class="form-control" value="{{ $company->address }}"/>
                </div>
                <div class="form-group">
                    <label for="phone1">Phone Num-1</label>
                    <input type="text" name='phone1' id="phone1" class="form-control" value="{{ $company->phone_num_1 }}"/>
                </div>
                <div class="form-group">
                    <label for="phone2" class="">Phone Num-2</label>
                    <input type="text" name='phone2' id="phone2" class="form-control" value="{{ $company->phone_num_2 }}"/>
                </div>
                <div class="form-group">
                    <label for="bkash1">Bkash Num-1</label>
                    <input type="text" name='bkash1' id="bkash1" class="form-control" value="{{ $company->bkash_1 }}"/>
                </div>
                <div class="form-group">
                    <label for="bkash2">Bkash Num-2</label>
                    <input type="text" name='bkash2' id="bkash2" class="form-control" value="{{ $company->bkash_2 }}"/>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name='email' id="email" class="form-control" value="{{ $company->email }}"/>
                </div>
                <div class="form-group">
                    <label for="website">Web-Site</label>
                    <input type="text" name='website' id="website" class="form-control" value="{{ $company->website }}"/>
                </div>
                <div class="form-group">
                    <label for="fileserver">File-Server</label>
                    <input type="text" name='fileserver' id="fileserver" class="form-control" value="{{ $company->file_server }}"/>
                </div>

                <button type="submit"> Submit </button>
            </form>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <img src = <?php echo (asset('storage/'.$company->logo)); ?> height="250px" width="250px" class="img-thumbnail rounded" alt = "Company Logo">
            </div>
        </div>
    </div>
@endsection
