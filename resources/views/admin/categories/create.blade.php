@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Category</h1>

<form action="{{ route('admin.categories.store') }}" method="POST">
@csrf
<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" />
</div>
<button class="btn btn-success">Add</button>

</form>

@stop
