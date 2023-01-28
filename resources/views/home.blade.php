@extends('layouts.app')

@section('content')
<div class="container mt-5">

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if(isset($errors) && $errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            {{$error}}
            @endforeach
        </div>
        @endif
        <div class="card">

            <div class="card-header font-weight-bold">
                <h2 class="float-left">Import Export Excel, CSV File -> Toshak Parmar</h2>
                <h2 class="float-right"><a href="{{ url('Export-File') }}" class="btn btn-success mr-1">Export Excel & CSV File</a></h2>
            </div>
            <div class="card-body">

                <form id="excel-csv-import-form" method="POST" action="{{ route('importfile') }}" accept-charset="utf-8"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="file" placeholder="Choose file">
                            </div>
                            @error('file')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-mt-10">
            <a href="{{url('Show-File-Records')}}"><button type="submit" class="btn btn-primary" id="submit">Show this File Record</button></a>
        </div>
    </div>
@endsection
