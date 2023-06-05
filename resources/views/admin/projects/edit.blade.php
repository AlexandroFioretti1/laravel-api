@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('comic.update', $comic->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 row ">
            <label for="title" class="col-4 col-form-label">title</label>
            <input value="{{$comic->title}}" type=" text" class="form-control" name="title" id="title" placeholder="title">
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-4 col-form-label" placeholder="Add Description">Description</label>
            <textarea value="{{$comic->description}}" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3 d-flex align-items-center gap-3">
            <div><img src="{{$comic->thumb}}" width="450" alt=""></div>
            <div class="w-100">
                <label for="thumb" class="col-4 col-form-label">thumb</label>
                <label for="thumb" class="col-4 col-form-label">Add Image</label>
                <input value="{{$comic->thumb}}" type=" text" class="form-control" name="thumb" id="thumb" placeholder="thumb">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <input value="{{$comic->price}}" type=" text" class="form-control" name="price" id="price" placeholder="price">
        </div>
        <div class="mb-3 row">
            <label for="series" class="col-4 col-form-label">Series</label>
            <input value="{{$comic->series}}" type=" text" class="form-control" name="series" id="series" placeholder="series">
        </div>
        <div class="mb-3 row">
            <label for="sale_date" class="col-4 col-form-label">Sale Date</label>

            <input value="{{$comic->sale_date}}" type="text" class="form-control" name="sale_date" id="sale_date" placeholder="sale date">
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-4 col-form-label">type</label>
            <input value="{{$comic->type}}" type=" text class=" form-control" name="type" id="type" placeholder="type">
        </div>
        <div class="container text-center pb-3">
            <button class="btn btn-primary " type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>
@endsection('content')