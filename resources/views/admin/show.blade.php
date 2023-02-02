@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center my-5">
        <h1 class="text-dark">INFO PROGETTO #{{ $project->id }}</h1>
    </div>
    <div class="card my-5">
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
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->cover_img }}</td>
                    <td>{{ $project->github_link }}</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="{{route("projects.index")}}"><button class="btn btn-secondary fw-semibold">Back to Home</button></a>
    </div>
</div>
@endsection
