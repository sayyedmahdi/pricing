<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
    <meta name="Author" content="SPRUKO™">
    <meta name="Keywords" content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix"/>

    <!-- Title -->
    <title>سایت قیمت دهی</title>

    <!-- styles -->
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="{{asset('assets/plugins/icons/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{asset('assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

    <!--  Sidemenu css -->
    <link rel="stylesheet" href="{{asset('assets/css-rtl/sidemenu.css')}}">

    <!--- Style css --->
    <link href="{{asset('assets/css-rtl/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/boxed.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/dark-boxed.css')}}" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet" />



    <!--- Animations css-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{asset('assets/switcher/css/switcher-rtl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet">
</head>

<body class="main-body">

<!-- switcher -->
<!-- Start Switcher -->
<div class="switcher-wrapper ">
    <div class="demo_changer">
        <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
        <div class="form_holder sidebar-right1">
            <div class="row">
                <div class="predefined_styles">
                    <div class="swichermainleft border-bottom  text-center">
                        <div class="p-3">
                            <a href="index.html" class="btn btn-primary btn-block mt-0">نمایش نسخه </a>
                            <a href="https://www.rtl-theme.com/valex-html-template/" class="btn btn-secondary btn-block">خرید کن</a>
                            <a href="https://www.rtl-theme.com/author/amir-h67/" class="btn btn-info btn-block">نمونه کارها ما</a>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom text-center">
                        <h4>ورژن</h4>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4>سبک های ناوبری LTR</h4>
                        <div class="ps-3 pe-3">
                            <a href="https://laravel.spruko.com/valex/rtl/vertical-light" class="btn btn-success btn-block mt-0">منو عمودی</a>
                            <a href="https://laravel.spruko.com/valex/rtl/horizontal-light" class="btn btn-info btn-block">منو افقی</a>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom mb-4">
                        <h4>سبک های ناوبری RTL</h4>
                        <div class="ps-3 pe-3">
                            <a class="btn btn-primary btn-block mt-0" href="index.html"> منو عمودی</a>
                            <a class="btn btn-danger btn-block" href="horizontal-light.html"> منو افقی </a>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4>تم طرح بندی منو </h4>
                        <div class="switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">تم روشن</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch30" class="onoffswitch2-checkbox" checked>
                                    <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">تم تیره</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch31" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch31" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4>حالت های پوستی</h4>
                        <div class="switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">بدنه پیش فرض</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch7" class="onoffswitch2-checkbox" checked>
                                    <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">بدنه سبک 1</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch6" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4 class="fs-14 font-weight-semibold">سبک های عرض طرح بندی منو</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-4">
                                    <span class="me-auto">نوار کناری پیش فرض</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch18" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">جعبه</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch19" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4 class="fs-14 font-weight-semibold">نسخه های طرح بندی منو</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-4">
                                    <span class="me-auto">پیش فرض منو</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch26" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">منو بسته</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch27" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch27" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">زیر دریایی شناور</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch28" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch28" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">پوشش آیکون</span>
                                    <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch29" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch29" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">متن آیکون</span>
                                    <a href="index.html" target="_self" class="onoffswitch2"><input type="radio" id="myonoffswitch30" name="onoffswitch4" class="onoffswitch2-checkbox">
                                        <label for="" class="onoffswitch2-label"></label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4>تصویر منو بگراند </h4>
                        <div class="skin-body light-pattern">
                            <button type="button" id="leftmenuimage1" class="bg1 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage2" class="bg2 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage3" class="bg3 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage4" class="bg4 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage5" class="bg5 wscolorcode1 blackborder"></button>
                        </div>
                    </div>
                    <div class="swichermainleft border-bottom">
                        <h4>سبک های منو</h4>
                        <div class="switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="me-auto"> رنگ منو</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle horizontal-Dark-switcher d-flex">
                                <span class="me-auto">منو تاریک</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch11" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">منو شیب رنگ</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">تنظیم سبک های منو</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch13" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->        <!-- switcher -->


<div class="error-page1 bg-light text-dark">


    <!-- Loader -->
    <div id="global-loader">
        <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">


        <!-- container -->
        <div class="container-fluid">

            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                    <div class="row wd-100p mr-center text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mr-center wd-100p">
                            <img src="{{asset('assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mr-center" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mr-center">
                                    <div class="card-sigin">
                                        <div class="card-sigin">
                                            <div class="card-sigin d-flex mb-5">
                                                <a href="index.html"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon-a ht-40" alt="logo">
                                                    <img src="{{asset('assets/img/brand/favicon-white.png')}}" class="sign-favicon-b ht-40" alt="logo">
                                                </a>
                                                <h1 class="main-logo1 ms-1 me-0 my-auto tx-28 ps-1">Va<span>le</span>x</h1>
                                            </div>
                                            <div class="card-sigin">
                                                <div class="main-signup-header">
                                                    <h2>خوش برگشتی!</h2>
                                                    <h5 class="fw-semibold mb-4">لطفا برای ادامه وارد شوید.</h5>
                                                    <form action="{{route('login_action')}}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>نام کاربری</label>
                                                            <input class="form-control" name="username" placeholder="نام کاربری خود را وارد کنید" type="text"  required>
                                                            @error('username')
                                                            <div class="alert alert-danger error">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>کلمه عبور</label>
                                                            <input class="form-control" name="password" placeholder="رمز عبور خود را وارد کنید" type="password" required>
                                                            @error('password')
                                                            <div class="alert alert-danger error">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <button class="btn btn-main-primary btn-block" type="submit">ورود</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End -->
                        </div>
                    </div><!-- End -->
                </div>
            </div>

        </div>
        <!-- container -->


    </div>

    <!-- scripts -->
    <!-- JQuery min js -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Ionicons js -->
    <script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>

    <!-- Moment js -->
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- eva-icons js -->
    <script src="{{asset('assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

    <!-- Rating js-->
    <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
    <script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>



    <!-- custom js -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Switcher js -->
    <script src="{{asset('assets/switcher/js/switcher-rtl.js')}}"></script>

</div>
<!-- class -->

</body>


</html>
