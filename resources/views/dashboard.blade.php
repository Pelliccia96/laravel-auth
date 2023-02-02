@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-secondary"><a href="{{ route('projects.index') }}" class="text-decoration-none fw-semibold text-white">Go to Index</a></button>
    </div>
</div>
@endsection
