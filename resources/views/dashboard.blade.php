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
    {{-- Tabella Users --}}
    <div class="card mb-5">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome e Cognome</th>
                <th>Email</th>
                <th>Creato il</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    {{-- Tabella Progetti --}}
    <div class="card mb-3">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Immagine</th>
                <th>GitHub</th>
                <th>INFO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->cover_img }}</td>
                    <td>{{ $project->github_link }}</td>
                    <td><a href="{{ route('show', $project->id) }}" class="text-decoration-none fw-semibold">Show #{{ $project->id }}</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <div>
        <a href="{{ route('create') }}"><button class="btn btn-secondary fw-semibold mx-3">&plus; Add New Project</button></a>
    </div>
</div>
@endsection
