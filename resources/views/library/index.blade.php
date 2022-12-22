@extends('library.master')

@section('content')

    <!-- Page Header-->
    <header class="masthead"
        style="background-image:url('{{ asset('libraryasset/assets/img/kazuend-DHk_mju83z0-unsplash.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">

                        <h1>مكتبة نون</h1>
                        <span class="subheading"> مكتبة رقمية للكتب والروايات الإلكترونية العربية والعالمية
                            <br> تحتوي آلاف
                            الكتب والروايات في جميع المجالات </span>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <!-- Main Content-->
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-10">
                <div class="component">
                    <ul class="align">
                        @forelse ( $books as $book )
                        <li>
                            <figure class='book'>
                                <!-- Front -->
                                <ul class='hardcover_front'>
                                    <li>
                                        <img src="{{ $book->image }}" alt="" width="100%" height="100%">
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
                    {{ $books->links() }}
                </div>
                <br>
            </div>
        </div>
    </div>
@stop
