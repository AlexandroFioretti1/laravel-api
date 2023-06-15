@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.projects.update', $project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3 row ">
            <h3 for="name" class="col-4 col-form-label">Project Name</h3>
            <input value="{{$project->name}}" type=" text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-center">Chose Type</label>
            <select class="form-select form-select-lg" name="type_id" id="type_id">
                <option value="">Select one</option>
                @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="screenshot" class="form-label">Image</label>
            <input type="file" class="form-control" name="screenshot" id="screenshot" aria-describedby="helpId" placeholder="Add Image">
            <small id="helpId" class="form-text text-muted"></small>
        </div>

        <div>
            @foreach ($technologies as $technology)
            <div class="form-check">
                <label class="form-check-label" for="technology{{$technology->id}}">
                    {{$technology->name}}
                    @if ($errors->any())
                    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology{{$technology->id}}" {{in_array($technology->id, old('technologies', [])) ? 'checked' : ''}}>
                    @else
                    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology{{$technology->id}}" {{$project->technologies->has($technology->id) ? 'checked' : ''}}>
                    @endif
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
        <a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button">Go back</a>
    </div>
</div>
@endsection('content')