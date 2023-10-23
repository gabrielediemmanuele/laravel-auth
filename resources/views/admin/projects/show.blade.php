@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-3">
    <a href="{{ route('admin.projects.index')}}" class="btn btn-primary"> 
        back to project list
    </a>
    {{-- <a href="{{ route('comics.create')}}" class="btn btn-primary">
        + Add New Comic
    </a> --}}
        {{-- <a href="{{ route('comics.edit', $comic)}}" class="btn btn-success">
            + Edit Comic
        </a> --}}
    <div class="card mt-3" style="width: 20rem;">
        <div class="card-header">
        <div><strong>ID: {{ $project->id}} </strong></div>
        <div><strong>Title: {{ $project->title}}</strong></div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Author: </strong>{{$project->author}}</li>
            <li class="list-group-item"><strong>Date: </strong>{{$project->date}}</li>
            <li class="list-group-item"><strong>Slug: </strong>{{$project->slug}}</li>
            <li class="list-group-item"><strong>Create at: </strong>{{$project->created_at}}</li>
            <li class="list-group-item"><strong>Update at: </strong>{{$project->updated_at}}</li>
            <li class="list-group-item"><strong>Description: </strong>{{$project->description}}</li>
        </ul>
    </div>
</div>
@endsection