@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Create New Book</h1>

<form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
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
    <label>File</label>
    <input type="file" name="file" class="form-control" />
</div>
<div class="mb-3">
    <label>Description</label>
    <textarea  name="description" class="form-control" placeholder="Description" rows="5"></textarea>
</div>

<div class="mb-3">
    <label>Author</label>
    <select name="author_id" class="form-control">
        <option value="" selected disabled>Select</option>
        @foreach ($authors as $author)
        <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <option value="" selected disabled>Select</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Page Count</label>
    <input type="text" name="pagecount" class="form-control" placeholder="Page Count" />
</div>

<div class="mb-3">
    <label>Publisher</label>
    <input type="text" name="publisher" class="form-control" placeholder="Publisher" />
</div>

<div class="mb-3">
    <label>Published At</label>
    <input type="date" name="published_at" class="form-control" placeholder="Published At" />
</div>

<button class="btn btn-success">Add</button>

</form>

@stop
