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
        <form action="{{ url('/company')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>New Company Data</h3>
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name='name' id="name" class="form-control" placeholder="Company Name"/>
            </div>
            <div class="form-group">
                    <label for="fileserver"> Upload Company Logo</label>
                    <input type="file" name='logo' id="logo" class="form-control-file" placeholder="Company Logo image"/>
            </div>
            <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name='address' id="address" class="form-control" placeholder="Company Address"/>
            </div>
            <div class="form-group">
                    <label for="phone1">Phone Num-1</label>
                    <input type="text" name='phone1' id="phone1" class="form-control" placeholder="Phone Number-1"/>
            </div>
            <div class="form-group">
                    <label for="phone2" class="">Phone Num-2</label>
                    <input type="text" name='phone2' id="phone2" class="form-control" placeholder="Phone Number-2"/>
            </div>
            <div class="form-group">
                    <label for="bkash1">Bkash Num-1</label>
                    <input type="text" name='bkash1' id="bkash1" class="form-control" placeholder="Bkash Number-1"/>
            </div>
            <div class="form-group">
                    <label for="bkash2">Bkash Num-2</label>
                    <input type="text" name='bkash2' id="bkash2" class="form-control" placeholder="Bkash Number-2"/>
            </div>
            <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name='email' id="email" class="form-control" placeholder="Company E-Mail"/>
            </div>
            <div class="form-group">
                    <label for="website">Web-Site</label>
                    <input type="text" name='website' id="website" class="form-control" placeholder="Company Web-Site"/>
            </div>
            <div class="form-group">
                    <label for="fileserver">File-Server</label>
                    <input type="text" name='fileserver' id="fileserver" class="form-control" placeholder="File or FTP Server"/>
            </div>

            <button type="submit" btn btn-primary> Save </button>
        </form>
    </div>
@endsection
