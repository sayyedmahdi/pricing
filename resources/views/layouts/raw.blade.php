<!DOCTYPE html>
<html lang="fa" dir="rtl" lang2="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow-x: hidden; max-width: 100%">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
    <meta name="Author" content="SPRUKO™">
    <meta name="Keywords" content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix"/>

    <!-- Title -->
    <title> @yield('title') </title>

    <!-- styles -->
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="{{asset('assets/plugins/icons/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{asset('assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

    <!--  Sidemenu css -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css-rtl/sidemenu.css')}}">


    <!--  Owl-carousel css-->
    <link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!-- Maps css -->
    <link href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!--Internal  Datetimepicker-slider css -->
    <link href="{{asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

    <!--- Style css --->

    <link href="{{asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/boxed.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/dark-boxed.css')}}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{asset('assets/css-rtl/animate.css')}}" rel="stylesheet">

    @yield('header_tags')

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('vendors/datepicker/daterangepicker.css')}}">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/style.css')}}" rel="stylesheet">
</head>
<body class="@yield('body-class') main-body app sidebar-mini" style="overflow-x: hidden; max-width: 100%" >
<div>
    <!-- end::page loader -->
    <div class="page">
        <!-- begin::main content -->
        <div class="main-content app-content" style="margin-right: 0px;">
            @include('partials.header')

            <div class="container-fluid">
                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">قیمت دهی محصولات</h4>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb -->

                @yield('content')
            </div>
        </div>
        <!-- end::main content -->
    </div>
</div>

{{--    <!-- Plugin scripts -->--}}
{{--	<script src="vendors/bundle.js"></script>--}}
<!-- Jquery js-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

{{--    <!--Internal  jquery-simple-datetimepicker js -->--}}
{{--    <script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>--}}
@yield('footer_tags')


<!-- Bootstrap js-->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap-rtl.js')}}"></script>

{{--    <!-- Ionicons js-->--}}
{{--    <script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>--}}

<!-- Moment js -->
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

<!-- P-scroll js -->
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll-rtl.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- sidemenu js -->
<script id="sidemenu" src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>

<!-- Right-sidebar js -->
<script src="{{asset('assets/plugins/sidebar/sidebar-rtl.js')}}"></script>
<script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>

<!-- eva-icons js -->
<script src="{{asset('assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

<!--Internal  Datepicker js -->
<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>


<!--Internal  pickerjs js -->
<script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

<!-- Ionicons js -->
<script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!--Internal  jquery.maskedinput js -->
<script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

<!--Internal  spectrum-colorpicker js -->
<script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

<!-- Internal form-elements js -->
<script src="{{asset('assets/js/form-elements.js')}}"></script>

<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>

{{--    <!-- App scripts -->--}}
{{--	<script src="{{asset('assets/js/app.js')}}"></script>--}}

</body>
</html>
