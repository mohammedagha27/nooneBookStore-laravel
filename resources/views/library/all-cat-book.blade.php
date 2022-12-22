@extends('library.master')
@section('title', 'Catygories')
@section('content')

    <div class="container-fluid px-4 px-lg-5" style="padding-top: 170px">
        <h1 class="text-center"><span class="text-danger">{{ $category->name }}</span> Books</h1>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-10">
                <div class="component">
                    <ul class="align">
                        @forelse ($category->Book as $book)
                            <li>
                                <figure class='book'>
                                    <!-- Front -->
                                    <ul class='hardcover_front'>
                                        <li>
                                            <img src="{{ asset($book->image) }}" alt="" width="100%" height="100%">
                                            <span class="ribbon bestseller">Nº1</span>
                                        </li>
                                        <li></li>
                                    </ul>
                                    <!-- Pages -->
                                    <ul class='page'>
                                        <li></li>
                                        <li>
                                            <a class="btn" href="{{ route('book', $book->id) }}">أقرأ المزيد</a>
                                        </li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <!-- Back -->
                                    <ul class='hardcover_back'>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class='book_spine'>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <figcaption>
                                        <h1>{{ $book->name }}</h1>
                                        <span>{{ $book->publisher }}</span>
                                        <p>{{ $book->description }}</p>
                                    </figcaption>
                                </figure>
                            </li>
                        @empty
                            <p class="text-danger">There is no books yet !</p>
                        @endforelse

                    </ul>
                </div>
                <div class="text-center">
                    {{-- {{ $category->Book()->links() }} --}}
                </div>
                <br>
            </div>
        </div>
    </div>
    @section('stayls')
        <style>
             #mainNav{
            background-color: #333 !important;
        }
        footer{
            background-color: #333
        }
        footer a,footer div{
            color: #fff !important;
        }

        </style>
    @stop
@stop
