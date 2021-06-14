@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm">
            <h3>Company Information</h3>
            <div>
                <label for="name">Name:</label>
                <pre id="name">{{ $company->name }}</pre>
            </div>
            <div>
                <label>Address:</label>
                <pre>{{ $company->address }}</pre>
            </div>
            <div>
                <label>Phone Number 1:</label>
                <pre>{{ $company->phone_num_1 }}</pre>
            </div>
            <div>
                <label>Phone Number 2:</label>
                <pre>{{ $company->phone_num_2 }}</pre>
            </div>
            <div>
                <label>Bkash Number 1:</label>
                <pre>{{ $company->bkash_1 }}</pre>
            </div>
            <div>
                <label>Bkash Number 1:</label>
                <pre>{{ $company->bkash_2 }}</pre>
            </div>
            <div>
                <label>E-Mail:</label>
                <pre>{{ $company->email }}</pre>
            </div>
            <div>
                <label>Web-Site:</label>
                <pre>{{ $company->website }}</pre>
            </div>
            <div>
                <label>FTP/File Server:</label>
                <pre>{{ $company->file_server }}</pre>
            </div>
            <div>
                <a href="{{ url('company/'.$company->id.'/edit') }}"><button type="submit" class="btn btn-primary">Edit Company Data</button></a>
            </div>
            <div>
                <form action= '{{ action('CompanyController@destroy', $company->id) }}' method='POST'>
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-danger">Delete Company Data</button>
</form>
            </div>
        </div>
        <div class="col-sm">
             <img src = <?php print (asset('storage/'.$company->logo)); ?> height="150px" width="150px" class="img-thumbnail rounded float-right" alt = "Company Logo">
        </div>
    </div>
@endsection
