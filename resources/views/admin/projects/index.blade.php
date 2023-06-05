@extends('layouts.admin')

@section('content')
<div class="container text-center">
    <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Create</a>
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
            @foreach ($projects as $project)
            <div class="card-body">
                <h4>{{$project->name}}</h4>
                <p>{{$project->start_date}}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.projects.show', $project->id)}}">show</a>
                <a class="btn btn-secondary" href="{{route('admin.projects.edit', $project->id)}}">edit</a>



                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$project->id}}">
                    delete
                </button>
                <div class="modal fade" id="modal-{{$project->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$project->id}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex flex-column">
                                <h5 class="modal-title" id="modalTitle-{{$project->id}}">Delete {{$project->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                            </div>
                            <div class="modal-body">
                                You are sure? no turn back for this file!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.projects.destroy', $project->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Are you sure??</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection