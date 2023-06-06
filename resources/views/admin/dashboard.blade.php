@extends('layouts.app')

@section('content')
<div class="container ">
    <h2 class="fs-4 text-secondary my-4"><a class="text-decoration-none" href="{{route('admin.dashboard')}}">
            {{ __('Dashboard') }}
        </a></h2>
    <h2 class="fs-4 text-secondary my-4"><a class="text-decoration-none" href="{{route('admin.projects.index')}}">
            {{ __('project') }}
        </a></h2>
</div>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1>My last project</h1>
                </div>
                <div class="card-body">
                    <h4>Name: {{$project[0]->name}}</h4>
                    <p>published: {{$project[0]->start_date}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection