@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Category</h1>

<form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
@csrf
@method('put')
<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $category->name }}" />
</div>
<button class="btn btn-success">Update</button>

</form>

@stop
