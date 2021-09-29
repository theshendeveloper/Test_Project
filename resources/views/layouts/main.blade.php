
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />   <title>لندریک  - قالب چندمنظوره ای مدرن html</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="JafarAbbasi" />
    <meta name="email" content="jabasi26@gmail.com" />
    <meta name="website" content="https://www.rtl-theme.com/author/tn_plugin/" />
    <meta name="Version" content="v3.0.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{asset('css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{asset('css/colors/default.css')}}" rel="stylesheet" id="color-opt">

</head>

<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">
                <img src="images/logo-dark.png" height="24" alt="">
            </a>
        </div>
        <div class="buy-button">
            <a href="https://www.rtl-theme.com/?p=133270" target="_blank" class="btn btn-primary">خرید از راست چین </a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="index.html" class="sub-menu-item">صفحه اصلی </a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">لندینگ دمو ها </a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="index-saas.html" class="sub-menu-item">ساس </a></li>
                                <li><a href="index-classic-saas.html" class="sub-menu-item">ساس کلاسیک  </a></li>
                                <li><a href="index-agency.html" class="sub-menu-item">آژانسی </a></li>
                                <li><a href="index-apps.html" class="sub-menu-item">اپلیکیشن </a></li>
                                <li><a href="index-classic-app.html" class="sub-menu-item">اپلیکیشن کلاسیک </a></li>
                                <li><a href="index-studio.html" class="sub-menu-item">استدیو </a></li>
                                <li><a href="index-marketing.html" class="sub-menu-item">مارکتینگ </a></li>
                                <li><a href="index-enterprise.html" class="sub-menu-item">پروژه </a></li>
                                <li><a href="index-services.html" class="sub-menu-item">خدمات </a></li>
                                <li><a href="index-payments.html" class="sub-menu-item">پرداخت ها </a></li>
                                <li><a href="index-crypto.html" class="sub-menu-item">کریپتوکارنسی </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-it-solution.html" class="sub-menu-item">شرکتی اطلاعاتی </a></li>
                                <li><a href="index-business.html" class="sub-menu-item">کسب و کار </a></li>
                                <li><a href="index-modern-business.html" class="sub-menu-item">کسب و کار مدرن </a></li>
                                <li><a href="index-corporate.html" class="sub-menu-item">کسب و کار تجارتی </a></li>
                                <li><a href="index-hotel.html" class="sub-menu-item">هتل و رزرو</a></li>
                                <li><a href="index-construction.html" class="sub-menu-item">ساخت و ساز </a></li>
                                <li><a href="index-real-estate.html" class="sub-menu-item">مشاوره املاک </a></li>
                                <li><a href="index-developer.html" class="sub-menu-item">توسعه دهندگی </a></li>
                                <li><a href="index-seo-agency.html" class="sub-menu-item">آژانسی سئو</a></li>
                                <li><a href="index-hospital.html" class="sub-menu-item">بیمارستان </a></li>
                                <li><a href="index-hosting.html" class="sub-menu-item">هاستینگ و دامنه </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-finance.html" class="sub-menu-item">شرکتی مالی  <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-videocall.html" class="sub-menu-item">ویدئو کنفرانس  <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-it-solution-two.html" class="sub-menu-item">شرکتی اطلاعاتی دو <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-freelancer.html" class="sub-menu-item">فریلنسری  <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-blockchain.html" class="sub-menu-item">بلاکچین  <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-crypto-two.html" class="sub-menu-item">کریپتوکارنسی دو <span class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-integration.html" class="sub-menu-item">ادغام </a></li>
                                <li><a href="index-task-management.html" class="sub-menu-item">مدیریت وظایف </a></li>
                                <li><a href="index-email-inbox.html" class="sub-menu-item">صندوق ایمیل </a></li>
                                <li><a href="index-travel.html" class="sub-menu-item">مسافرت  </a></li>
                                <li><a href="index-blog.html" class="sub-menu-item">وبلاگ </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-landing-one.html" class="sub-menu-item">لندینگ یک </a></li>
                                <li><a href="index-landing-two.html" class="sub-menu-item">لندینگ دو </a></li>
                                <li><a href="index-landing-three.html" class="sub-menu-item">لندینگ سه </a></li>
                                <li><a href="index-landing-four.html" class="sub-menu-item">لندینگ چهار </a></li>
                                <li><a href="index-shop.html" class="sub-menu-item">فروشگاه </a></li>
                                <li><a href="index-insurance.html" class="sub-menu-item">بیمه </a></li>
                                <li><a href="index-online-learning.html" class="sub-menu-item">آموزش آنلاین </a></li>
                                <li><a href="index-personal.html" class="sub-menu-item">شخصی </a></li>
                                <li><a href="index-coworking.html" class="sub-menu-item">همکار </a></li>
                                <li><a href="index-course.html" class="sub-menu-item">دوره ها </a></li>
                                <li><a href="forums.html" class="sub-menu-item">انجمن ها </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-event.html" class="sub-menu-item">رویدادها </a></li>
                                <li><a href="index-single-product.html" class="sub-menu-item">محصول </a></li>
                                <li><a href="index-portfolio.html" class="sub-menu-item">نمونه کار </a></li>
                                <li><a href="index-job.html" class="sub-menu-item">کاریابی </a></li>
                                <li><a href="index-social-marketing.html" class="sub-menu-item">سوشیال مدیا </a></li>
                                <li><a href="index-digital-agency.html" class="sub-menu-item"> دیجیتال آژانسی </a></li>
                                <li><a href="index-car-riding.html" class="sub-menu-item">ماشین سواری</a></li>
                                <li><a href="index-customer.html" class="sub-menu-item">مشتریان </a></li>
                                <li><a href="index-software.html" class="sub-menu-item">نرم افزار </a></li>
                                <li><a href="index-ebook.html" class="sub-menu-item">کتاب الکترونیکی </a></li>
                                <li><a href="index-onepage.html" class="sub-menu-item">ساس  <span class="badge bg-warning ms-2">تک صفحه ای </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">صفحات </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> کمپانی  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html" class="sub-menu-item"> درباره ما </a></li>
                                <li><a href="page-aboutus-two.html" class="sub-menu-item"> درباره ما 2 </a></li>
                                <li><a href="page-services.html" class="sub-menu-item">خدمات </a></li>
                                <li><a href="page-history.html" class="sub-menu-item">تاریخچه </a></li>
                                <li><a href="page-team.html" class="sub-menu-item"> تیم </a></li>
                                <li><a href="page-pricing.html" class="sub-menu-item">قیمت گذاری </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> حساب کاربری  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="account-profile.html" class="sub-menu-item">پروفایل </a></li>
                                <li><a href="account-members.html" class="sub-menu-item">اعضا  </a></li>
                                <li><a href="account-works.html" class="sub-menu-item">کارها</a></li>
                                <li><a href="account-messages.html" class="sub-menu-item">پیام ها </a></li>
                                <li><a href="account-payments.html" class="sub-menu-item">پرداخت ها  </a></li>
                                <li><a href="account-setting.html" class="sub-menu-item">تنظیمات </a></li>
                                <li><a href="page-invoice.html" class="sub-menu-item">صورتحساب </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> فروشگاه </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-grids.html" class="sub-menu-item">گرید محصولات </a></li>
                                <li><a href="shop-lists.html" class="sub-menu-item">محصولات لیستی </a></li>
                                <li><a href="shop-product-detail.html" class="sub-menu-item">جزئیات محصول </a></li>
                                <li><a href="shop-cart.html" class="sub-menu-item">سبد خرید </a></li>
                                <li><a href="shop-checkouts.html" class="sub-menu-item">پرداختی ها </a></li>
                                <li><a href="shop-myaccount.html" class="sub-menu-item">حساب من </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> مرکز پشتیبانی </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html" class="sub-menu-item">مرکز ارتباط </a></li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item">گفت و گو </a></li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item">راهنماها </a></li>
                                <li><a href="helpcenter-support-request.html" class="sub-menu-item">پشتیبانی تماسی </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> انجمن ها  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="forums.html" class="sub-menu-item">بررسی اجمالی  </a></li>
                                <li><a href="forums-topic.html" class="sub-menu-item">موضوع انجمن </a></li>
                                <li><a href="forums-comments.html" class="sub-menu-item">نظرات انجمن  </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> قالب ایمیل</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="email-confirmation.html" class="sub-menu-item">تائیدیه </a></li>
                                <li><a href="email-password-reset.html" class="sub-menu-item">بازیابی رمز عبور</a></li>
                                <li><a href="email-alert.html" class="sub-menu-item">هشدار </a></li>
                                <li><a href="email-invoice.html" class="sub-menu-item">صورتحساب </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">مشاغل </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-jobs.html" class="sub-menu-item">کارها </a></li>
                                <li><a href="page-jobs-sidebar.html" class="sub-menu-item">کارها - سایدبار</a></li>
                                <li><a href="page-job-detail.html" class="sub-menu-item">جزئیات کار</a></li>
                                <li><a href="page-job-apply.html" class="sub-menu-item">اعمال کار </a></li>
                                <li><a href="page-job-company-list.html" class="sub-menu-item">لیست شرکت </a></li>
                                <li><a href="page-job-company.html" class="sub-menu-item">جزئیات شرکت</a></li>
                                <li><a href="page-job-candidate-list.html" class="sub-menu-item">لیست نامزدها </a></li>
                                <li><a href="page-job-candidate.html" class="sub-menu-item">جزئیات نامزد </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> وبلاگ  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-blog-grid.html" class="sub-menu-item">گرید وبلاگ </a></li>
                                <li><a href="page-blog-sidebar.html" class="sub-menu-item">وبلاگ با سایدبار </a></li>
                                <li><a href="page-blog-list.html" class="sub-menu-item">وبلاگ فهرستی</a></li>
                                <li><a href="page-blog-list-sidebar.html" class="sub-menu-item">فهرست وبلاگ و سایدبار</a></li>
                                <li><a href="page-blog-detail.html" class="sub-menu-item">جزئیات وبلاگ </a></li>
                                <li><a href="page-blog-detail-two.html" class="sub-menu-item">جزئیات وبلاگ  2 </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> مطالعه موردی  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-cases.html" class="sub-menu-item">همه موارد </a></li>
                                <li><a href="page-case-detail.html" class="sub-menu-item">جزئیات پرونده </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> نمونه کار </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-portfolio-modern.html" class="sub-menu-item">نمونه کار مدرن </a></li>
                                <li><a href="page-portfolio-classic.html" class="sub-menu-item">نمونه کار کلاسیک </a></li>
                                <li><a href="page-portfolio-grid.html" class="sub-menu-item">نمونه کار گرید </a></li>
                                <li><a href="page-portfolio-masonry.html" class="sub-menu-item">نمونه کار ساختمانی </a></li>
                                <li><a href="page-portfolio-detail.html" class="sub-menu-item">جزئیات نمونه کار </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> دیگر صفحات  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">ورود </a></li>
                                <li><a href="auth-cover-login.html" class="sub-menu-item">ورود 2 </a></li>
                                <li><a href="auth-login-three.html" class="sub-menu-item">ورود 3 </a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">ثبت نام </a></li>
                                <li><a href="auth-cover-signup.html" class="sub-menu-item">ثبت نام 2</a></li>
                                <li><a href="auth-signup-three.html" class="sub-menu-item">ثبت نام 3</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">بازیابی رمز عبور</a></li>
                                <li><a href="auth-cover-re-password.html" class="sub-menu-item">بازیابی رمز عبور 2</a></li>
                                <li><a href="auth-re-password-three.html" class="sub-menu-item">بازیابی رمز عبور 3</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> نرم افزار </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-terms.html" class="sub-menu-item">خدمات سایت </a></li>
                                <li><a href="page-privacy.html" class="sub-menu-item">حریم خصوصی </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> صفحات خاص </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-comingsoon.html" class="sub-menu-item">به زودی </a></li>
                                <li><a href="page-comingsoon2.html" class="sub-menu-item">به زودی 2</a></li>
                                <li><a href="page-maintenance.html" class="sub-menu-item">در دست ساخت </a></li>
                                <li><a href="page-error.html" class="sub-menu-item">خطا </a></li>
                                <li><a href="page-thankyou.html" class="sub-menu-item">صفحه تشکر </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> تماس با ما </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-contact-detail.html" class="sub-menu-item">جزئیات تماس </a></li>
                                <li><a href="page-contact-one.html" class="sub-menu-item">تماس 1</a></li>
                                <li><a href="page-contact-two.html" class="sub-menu-item">تماس 2</a></li>
                                <li><a href="page-contact-three.html" class="sub-menu-item">تماس 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">اسناد </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="documentation.html" class="sub-menu-item">مستند </a></li>
                        <li><a href="changelog.html" class="sub-menu-item">تغییرات </a></li>
                        <li><a href="components.html" class="sub-menu-item">اجزاء </a></li>
                        <li><a href="widget.html" class="sub-menu-item">ابزارک </a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="https://www.rtl-theme.com/?p=133270" target="_blank" class="btn btn-primary">خرید از راست چین </a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->


@yield('content')


<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="images/logo-light.png" height="24" alt="">
                </a>
                <p class="mt-4">کار با لنـدریــک را شروع کنید که می تواند همه چیزهایی را که برای ایجاد آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">شرکت </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> درباره ما </a></li>
                    <li><a href="page-services.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات </a></li>
                    <li><a href="page-team.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تیم </a></li>
                    <li><a href="page-pricing.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> قیمت گذاری </a></li>
                    <li><a href="page-portfolio-modern.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> پروژه </a></li>
                    <li><a href="page-jobs.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> مشاغل </a></li>
                    <li><a href="page-blog-grid.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> وبلاگ </a></li>
                    <li><a href="auth-cover-login.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> ورود </a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">لینک های مفید </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-terms.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات سایت </a></li>
                    <li><a href="page-privacy.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> حریم خصوصی </a></li>
                    <li><a href="documentation.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> مستند </a></li>
                    <li><a href="changelog.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تغییرات </a></li>
                    <li><a href="components.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> اجزاء </a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">خبرنامه </h5>
                <p class="mt-4">ثبت نام کنید و آخرین نکات را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe mb-3">
                                <label class="form-label">ایمیل خود را بنویسید <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="ایمیل شما: " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="خبرنامه">
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-start">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> لنـدریــک. طراحی شده با  <i class="mdi mdi-heart text-danger"></i> توسط  <a href="https://www.rtl-theme.com/author/tn_plugin/" target="_blank" class="text-reset">جعفر عباسی </a>.</p>
                </div>
            </div><!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled text-sm-end mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="آمریکن اکسپرس" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="کشف کردن" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="مستر کارت" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="پی پال" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="ویزا" alt=""></a></li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- Style switcher --> <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
    <div>
        <h6 class="title text-center">رنگ خود را انتخاب کنید </h6>
        <ul class="pattern">
            <li class="list-inline-item">
                <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color4" href="javascript: void(0);" onclick="setColor('red')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color7" href="javascript: void(0);" onclick="setColor('cyan')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
            </li>
        </ul>

        <h6 class="title text-center pt-3 mb-0 border-top">تنظیمات قالب </h6>
        <ul class="text-center list-unstyled mb-0">
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-rtl')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark-rtl')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">تیره </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">روشن </a></li>
        </ul>
    </div>
    <div class="bottom">
        <a href="javascript: void(0);" class="settings bg-white shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
    </div>
</div>
<!-- end Style switcher -->

<!-- javascript -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Icons -->
<script src="{{asset('js/feather.min.js')}}"></script>
<!-- Switcher -->
<script src="{{asset('js/switcher.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('js/plugins.init.js')}}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{asset('js/app.js')}}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>