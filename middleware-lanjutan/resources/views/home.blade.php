@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href=" {{ route('route1') }} " class="btn btn-success w-100">route 1</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('route2') }}" class="btn btn-success w-100">route 2</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('route3') }}" class="btn btn-success w-100">route 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
