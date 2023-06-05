@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2 class="fs-4 text-secondary my-4"><a href="{{route('admin.dashboard')}}">
            {{ __('Dashboard') }}
        </a></h2>
    <h2 class="fs-4 text-secondary my-4"><a href="{{route('admin.projects.index')}}">
            {{ __('project') }}
        </a></h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card-header">
                <h1>last project</h1>
            </div>
            <div class="card-body">
                <h4>{{$project[0]->name}}</h4>
            </div>
        </div>
    </div>
</div>
</div>
@endsection