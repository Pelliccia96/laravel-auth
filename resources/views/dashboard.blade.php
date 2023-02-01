@extends('layouts.app')

@section('content')
<div class="container">
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
    <div class="card">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Immagine</th>
                <th>GitHub</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->description }}</td>
                    <td>{{ $user->cover_img }}</td>
                    <td>{{ $user->github_link }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
