@extends('layouts.app')

@section('content')

<div class="container p-4">
    <form action="{{route('admin.projects.store')}}" method="post">
        @csrf
        <div class="mb-3 row ">
            <label for="name" class="col-4 col-form-label">Add new project: Name</label>
            <input value="{{old('name')}}" type=" text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="container text-center pb-3">
            <button class="btn btn-primary " type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
    <div class="text-center">
        <a class="btn btn-primary " href="{{route('admin.projects.index')}}" role="button">Go back</a>
    </div>
</div>
@endsection('content')