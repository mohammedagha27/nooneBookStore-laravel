@extends('library.master')

@section('content')

    <!-- Page Header-->
    {{-- <header class="masthead"
        style="background-position: center !important;background-image: url({{ asset('libraryasset/assets/img/contact-us.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>! أتصل بنا</h1>
                        <span class="subheading">فريق مختص للاجابة على جميع استفساراتكم</span>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-10 col-xl-10 single-book">
                    <div class="single-item">
                        <div class="left-set">
                            <img src="{{ asset('/') . $book->image }}" alt="" />
                        </div>
                        <div class="right-set">
                            <div class="name">{{ $book->name }}</div>
                            <div class="subname">{{ $book->publisher }}</div>
                            <div class="price">Free</div>
                            <div class="description">
                                <p>
                                    {{ $book->description }}
                                </p>
                            </div>
                            <button><a href="{{ asset('uploads/' . $book->file) }}" download class="text-white">Download
                                    <i class="fa-solid fa-download"></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
@section('stayls')
    <style>
        #mainNav {
            background-color: #333 !important;
        }

        footer {
            background-color: #333
        }

        footer a,
        footer div {
            color: #fff !important;
        }

        .single-book {
            /* background-color: #a6121e; */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 200px 0;
            margin-top: 100px;
        }

        .single-item {
            width: 670px;
            height: 360px;
            max-width: 100%;
            border: solid 6px #fff;
            border-radius: 20px;
            background: whitesmoke;
            box-shadow: 10px 30px 50px -20px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            transform: scale(1.2)
        }

        .left-set,
        .right-set {
            position: relative;
            width: 50%;
            height: 100%;
        }

        .left-set {
            float: left;
            background: linear-gradient(#eb3f4d 50%, azure 50%);
            height: 450px;
            width: 320px;
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
            margin-top: -50px;
        }

        .left-set img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 300px;
            height: 400px;
        }

        .right-set {
            float: right;
            padding: 2rem 1rem;
            box-sizing: border-box;
        }

        .right-set .name,
        .right-set .subname {
            font-weight: bold;
        }

        .right-set .name {
            font-size: 1.4rem;
            line-height: 2rem;
        }

        .right-set .subname {
            font-size: 0.8rem;
            line-height: 1rem;
        }

        .right-set .price {
            padding: 1rem 0;
            font-size: 2rem;
            font-weight: bold;
        }

        .right-set .description p {
            font-size: 0.9rem;
            text-align: justify;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
        }

        .right-set .color {
            margin: 1rem 0;
        }

        .right-set .color:after {
            content: "";
            display: block;
            clear: left;
        }

        .right-set .color ul li {
            width: 20px;
            height: 20px;
            border: solid 2px #aaa;
            list-style: none;
            border-radius: 4px;
            float: right;
            left: -20px;
            margin-right: 0.4rem;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .right-set .color ul li:nth-child(1) {
            background: #a6121e;
            margin-right: 40px;
        }

        .right-set .color ul li:nth-child(1):hover {
            border-color: #a6121e;
        }

        .right-set .color ul li:nth-child(2) {
            background: azure;
        }

        .right-set .color ul li:nth-child(2):hover {
            border-color: azure;
        }

        .right-set button {
            width: 70%;
            height: 40px;
            margin-top: 50px;
            border-radius: 20px;
            border: none;
            background: linear-gradient(to bottom left, #eb3f4d, #7d0711);
            box-shadow: 0px 0px 50px #db8f95;
            color: white;
        }

    </style>
@stop
