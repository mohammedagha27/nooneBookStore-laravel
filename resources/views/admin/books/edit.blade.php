@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Book</h1>

<form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $book->name }}" />
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control" />
    <img width="100" src="{{ asset($book->image) }}" alt="">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea  name="description" class="form-control" placeholder="Description" rows="5">{{ $book->description }}</textarea>
</div>

<div class="mb-3">
    <label>Author</label>
    <select name="author_id" class="form-control">
        <option value="" selected disabled>Select</option>
        @foreach ($authors as $author)
        <option {{ $book->author_id == $author->id ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <option value="" selected disabled>Select</option>
        @foreach ($categories as $category)
        <option {{ $book->author_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Page Count</label>
    <input type="text" name="pagecount" class="form-control" placeholder="Page Count" value="{{ $book->pagecount }}" />
</div>

<div class="mb-3">
    <label>Publisher</label>
    <input type="text" name="publisher" class="form-control" placeholder="Publisher" value="{{ $book->publisher }}" />
</div>

<div class="mb-3">
    <label>Published At</label>
    <input type="date" name="published_at" class="form-control" placeholder="Published At" value="{{ $book->published_at }}" />
</div>

<button class="btn btn-success">Update</button>

</form>

@stop
