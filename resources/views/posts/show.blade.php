@extends('layouts.main')
@section('content')
<!-- Hero Start -->
<section class="bg-half d-table w-100" style="background: url('images/1.jpg') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h3 class="title text-white title-dark">
                    {{$post->title}}
                    </h3>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-2 d-none d-md-block">
                        <ul class="list-unstyled text-center sticky-bar social-icon mb-0">
                            <li class="mb-3 h6">اشتراک </li>
                            <li><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="col-md-10">

                        <img src="{{$post->banner}}" class="img-fluid rounded-md shadow" alt="">

                        <h5 class="mt-4">{{$post->title}}</h5>
                        <div class="row col-5 mx-auto">
                            <video src="{{$post->video}}" controls>
                            </video>
                        </div>

                        <p class="text-muted">
                            {!! $post->content !!}

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @endsection