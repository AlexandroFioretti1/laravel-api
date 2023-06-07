@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.projects.update', $project->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 row ">
            <h3 for="name" class="col-4 col-form-label">Project Name</h3>
            <input value="{{$project->name}}" type=" text" class="form-control" name="name" id="name" placeholder="name">
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Type
            </button>
            <div class="mb-3">
                <label for="type" class="form-label text-center">Chose Type</label>
                <select class="form-select form-select-lg" name="type_id" id="type_id">
                    <option>Select one</option>
                    @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="container text-center pb-3">
                <button class="btn btn-primary " type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>
    </form>

    <div class="text-center">
        <a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button">Go back</a>
    </div>
</div>
@endsection('content')