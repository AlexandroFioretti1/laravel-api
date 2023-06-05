@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4"><a href="{{route('admin.dashboard')}}">
            {{ __('Dashboard') }}
        </a></h2>
    <h2 class="fs-4 text-secondary my-4"><a href="{{route('admin.projects.index')}}">
            {{ __('project') }}
        </a></h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card-header">
                <h1>Project Created</h1>
            </div>
            <div class="card-body">
                @foreach ($projects as $project)
                <h4>{{$project->name}}</h4>
                <p>{{$project->start_date}}</p>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection