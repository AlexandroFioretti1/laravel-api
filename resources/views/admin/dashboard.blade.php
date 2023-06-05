@extends('layouts.app')

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

        </div>
    </div>
</div>
@endsection