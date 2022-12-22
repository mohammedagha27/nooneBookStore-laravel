@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<style>
    .table tr,
    .table td {
        vertical-align: middle;
    }
</style>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Books</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-hover table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Image</th>
    <th>Author</th>
    <th>Category</th>
    <th>Page Count</th>
    <th>Publisher</th>
    <th>Publishe At</th>
    <th>Created At</th>
    <th>Actions</th>
</tr>
@foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td><img width="100" src="{{ asset($book->image) }}" alt=""></td>
        <td>{{ $book->author->name }}</td>
        <td>{{ $book->category->name }}</td>
        <td>{{ $book->publisher }}</td>
        <td>{{ $book->pagecount }}</td>
        <td>{{ $book->published_at }}</td>
        <td>{{ $book->created_at->diffForHumans() }}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.books.edit', $book->id) }}"><i class="fas fa-edit"></i></a>
            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
            <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-edit"></i></button>
        </form>
        </td>
    </tr>
@endforeach
</table>

@stop
