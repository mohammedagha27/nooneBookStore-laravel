@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Categories</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-hover table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Created At</th>
    <th>Actions</th>
</tr>
@foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->created_at->diffForHumans() }}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
            <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-edit"></i></button>
        </form>
        </td>
    </tr>
@endforeach
</table>

@stop
