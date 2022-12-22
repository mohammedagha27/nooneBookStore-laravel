@extends('library.master')
@section('title', 'Catygories')
@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('libraryasset/assets/img/library.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>أقسام الكتب </h1>
                        <span class="subheading" style="font-size: 30px !important">إلى جميع القراء العرب وللطلبة في
                            مدارس الوطن العربي, شاملة أبناء الجاليات العربية في الدول الأجنبية, ومتعلمي اللغة العربية من
                            الناطقين بغيرها في كل مكان</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                @forelse ($categories as $item)
                    <article class="col-md-6 col-lg-4 col-xl-3 grid mx-3 mt-4 ">
                        <div class="text text-center">
                            <h3>✒️{{ $item->name }}</h3>
                            <img width="90%" src="{{ asset('libraryasset/assets/img/book.jpg') }}" alt="">
                            <a href="{{ route('category', $item->id) }}" class="btn">Show Books</a>
                        </div>
                    </article>
                @empty
                    <p class="text-danger" style="text-align: center">There is no categories yet!</p>
                @endforelse




            </div>
        </div>

    </main>

@stop
@section('stayls')
    <style>
        * {
            box-sizing: border-box;
        }

        .box {
            background-color: #fff;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 30px;
            max-width: 1000px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap');


        article.grid {
            border: 1px solid #ccc;
            box-shadow: 2px 2px 6px 0px rgba(187, 163, 206, 1);
            background-color: #fff;
            padding: 20px 0 0;
            border-radius: 20px;
            transition: all .4s ease;
        }

        article img {
            border-radius: 5px;
            transition: all .4s ease;
        }

        article.grid:hover {
            transform: scale(.95)
        }

        .grid .text {
            padding: 10px 20px 20px 30px;
            color: #808285;
            margin-bottom: 20px;

        }

        .grid .btn {
            margin-top: 20px;
            background-color: #e0d4e9;
            border: 0;
            border-radius: 5px;
            color: #000;
            font-size: 15px;
            padding: 5px 10px 5px 10px;
            line-height: 5;
            font-family: 'Roboto', sans-serif;
            text-decoration: none;

        }

        .btn:hover {
            background: #d1d3d4;
            transition-duration: 80ms;
        }

        h3 {
            color: #000;
            /* text-align: left; */
            text-align: center;
            margin-bottom: 20px;
        }

    </style>

@stop
