@extends('layout')
@section('content')
<div class="container mt-5 border p-3">
    <div class="row pb-5">
        <div class="col-xl-12">
            <a href=" {{ route('file.create') }} " class="btn btn-success btn-sm float-right"> Add More </a>
        </div>
    </div>

    <div class="row">
        @foreach($files as $file)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 m-auto p-2">
            <div class="card shadow">
                <div class="card-body">
                    <img src="/uploads/{{ $file->filename }} " class="img-fluid img-thumbnails">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>