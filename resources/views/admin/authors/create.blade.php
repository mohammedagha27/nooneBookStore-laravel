@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Author</h1>

<form action="{{ route('admin.authors.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" />
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control" />
</div>

<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" placeholder="Phone" />
</div>

<div class="mb-3">
    <label>Facebook</label>
    <input type="text" name="facebook" class="form-control" placeholder="Facebook" />
</div>

<div class="mb-3">
    <label>Twitter</label>
    <input type="text" name="twitter" class="form-control" placeholder="Twitter" />
</div>

<div class="mb-3">
    <label>Bio</label>
    <textarea  name="bio" class="form-control" placeholder="Bio" rows="5"></textarea>
</div>
<button class="btn btn-success">Add</button>

</form>

@stop
