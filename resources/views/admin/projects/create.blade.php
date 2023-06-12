@extends('layouts.app')

@section('content')

<div class="container p-4">
    <form action="{{route('admin.projects.store')}}" method="post">
        @csrf
        <div class="mb-3 row ">
            <label for="name" class="col-4 col-form-label">
                <h2 class="text-center">Add new project</h2>
            </label>
            <input value="{{old('name')}}" type=" text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select form-select-lg" name="type_id" id="type_id">
                <option value="">Select one</option>
                @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            @foreach ($technologies as $technology)
            <div class="form-check">
                <label class="form-check-label" for="technology{{$technology->id}}">
                    {{$technology->name}}
                    <input class="form-check-input" {{in_array($technology->id,old('technologies',[])) ?"checked" : ""}} type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology{{$technology->id}}">
                </label>
            </div>
            @endforeach
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