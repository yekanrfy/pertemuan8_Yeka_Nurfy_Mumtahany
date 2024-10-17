@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            <div class="alert alert-success">
                You are logged iin!
            </div>
            @endif
        </div>
    </div>
</div>

@endsection