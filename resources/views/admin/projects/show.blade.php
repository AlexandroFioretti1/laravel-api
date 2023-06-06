@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3>{{$project->name}}</h3>
                <p>{{$project->start_date}}</p>
            </div>
            <a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button">Go back</a>
        </div>
    </div>
</div>
@endsection