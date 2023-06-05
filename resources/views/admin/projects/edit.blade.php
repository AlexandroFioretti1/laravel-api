@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.projects.update', $project->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 row ">
            <label for="name" class="col-4 col-form-label">Name</label>
            <input value="{{$project->name}}" type=" text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="container text-center pb-3">
            <button class="btn btn-primary " type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
    <a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button">Go back</a>
</div>
@endsection('content')