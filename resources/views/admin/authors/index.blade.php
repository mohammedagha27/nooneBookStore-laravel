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
<h1 class="h3 mb-4 text-gray-800">All Authors</h1>

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
    <th>Phone</th>
    <th>Facebook</th>
    <th>Twitter</th>
    <th>Created At</th>
    <th>Actions</th>
</tr>
@foreach ($authors as $author)
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td><img width="100" src="{{ asset($author->image) }}" alt=""></td>
        <td>{{ $author->phone }}</td>
        <td>{{ $author->facebook }}</td>
        <td>{{ $author->twitter }}</td>
        <td>{{ $author->created_at->diffForHumans() }}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.authors.edit', $author->id) }}"><i class="fas fa-edit"></i></a>
            <form action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
            <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-edit"></i></button>
        </form>
        </td>
    </tr>
@endforeach
</table>

@stop
