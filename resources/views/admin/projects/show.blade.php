@extends('layouts.admin')

@section('content')

<div class="container pt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3>Project Name: {{$project->name}}</h3>
                <p>Published: {{$project->start_date}}</p>
                <p>type: {{$project->type?->name}}</p>
                <p>technology: </p>

                @foreach($project->technologies as $technology)
                <p>{{$technology->name}}</p>
                @endforeach
            </div>
            <div class="text-center pt-4">
                <a class="btn btn-primary" href=" {{route('admin.projects.index')}}" role="button">Go back</a>
            </div>
        </div>
    </div>
</div>
@endsection