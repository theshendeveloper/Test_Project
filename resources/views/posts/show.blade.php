@extends('layouts.main')
@section('content')
<!-- Hero Start -->
<section class="bg-half d-table w-100" style="background: url('images/1.jpg') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h3 class="title text-white title-dark"> هوشمندترین برنامه ها برای <br> کسب و کار شما  </h3>
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
                        <p class="text-muted">این مورد زمانی الزامی است که مثلاً متن نهایی هنوز در دسترس نیست. متن ساختگی به عنوان 'متن پر نیز شناخته می شود'. گفته می شود که آهنگسازان آهنگ های گذشته از متن ساختگی به عنوان شعر استفاده می کردند هنگام نوشتن ملودی به منظور داشتن متن "آماده" برای آواز خواندن با ملودی.</p>

                        <ul class="list-unstyled d-flex justify-content-between mt-4">
                            <li class="list-inline-item user me-2"><a href="javascript:void(0)" class="text-muted"><i class="uil uil-user text-dark"></i> کالوین لورس</a></li>
                            <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> اردیبهشت 1400</li>
                        </ul>

                        <img src="images/blog/bg1.jpg" class="img-fluid rounded-md shadow" alt="">

                        <h5 class="mt-4">صبح ها فقط به دلیل راز یک زندگی فوق العاده موفق است</h5>

                        <p class="text-muted">به دلیل استفاده گسترده از آن به عنوان متن پر کننده برای طرح بندی, غیرقابل خواندن از اهمیت زیادی برخوردار است: ادراک انسان برای شناسایی الگوها و تکرارهای خاص در متن تنظیم شده است. اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی کند از قضاوت بی طرف در مورد تأثیر بصری و خوانایی انواع حروف (تایپوگرافی) ، یا توزیع متن در صفحه (طرح یا ناحیه نوع).</p>

                        <h5 class="mt-4">نظرات :</h5>

                        <ul class="media-list list-unstyled mb-0">
                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="flex-1 commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                            <small class="text-muted">اردیبهشت 1400 - ساعت 14:40 بعد ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/02.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="flex-1 commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">تامی کاماچو</a></h6>
                                            <small class="text-muted">اردیبهشت 1400 - ساعت 15:40 بعد ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/03.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="flex-1 commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">تامی کاماچو</a></h6>
                                            <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                </div>

                                <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="flex-1 commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                                    <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از ظهر</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <h5 class="mt-4">ارسال نظر :</h5>

                        <form class="mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">نظر شما</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                            <textarea id="message" placeholder="کامنت شما" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">نام  <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input id="name" name="name" type="text" placeholder="نام" class="form-control ps-5" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">ایمیل شما <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input id="email" type="email" placeholder="ایمیل" name="email" class="form-control ps-5" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="send d-grid">
                                        <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @endsection