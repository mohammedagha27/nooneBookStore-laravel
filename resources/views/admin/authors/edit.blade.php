@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Author</h1>

<form action="{{ route('admin.authors.update', $author->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $author->name }}" />
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control" />
    <img width="100" src="{{ asset($author->image) }}" alt="">
</div>

<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $author->phone }}" />
</div>

<div class="mb-3">
    <label>Facebook</label>
    <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{ $author->facebook }}" />
</div>

<div class="mb-3">
    <label>Twitter</label>
    <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="{{ $author->twitter }}" />
</div>

<div class="mb-3">
    <label>Bio</label>
    <textarea  name="bio" class="form-control" placeholder="Bio" rows="5">{{ $author->bio }}</textarea>
</div>
<button class="btn btn-success">Update</button>

</form>

@stop
