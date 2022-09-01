@section('header_tags')
    <!--  Right-sidemenu css -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{asset('assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

    <!--  Sidemenu css -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css-rtl/sidemenu.css')}}">
@endsection
<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="/"><img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="/"><img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="/"><img src="{{asset('assets/img/brand/logo.png')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="/"><img src="{{asset('assets/img/brand/logo.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="user-info">
{{--                    <h4 class="fw-semibold mt-3 mb-0">{{auth()->user()->name . "  " . auth()->user()->surname}}</h4>--}}
{{--                    <span class="mb-0 text-muted">{{auth()->user()->getRoleNames()[0]}}</span>--}}
                </div>
            </div>
        </div>
        <ul class="side-menu">
            @foreach($menus as $menu)
                @can($menu['permission'] || empty($menu['permission']))
                    @foreach($menu['subMenus'] as $sub)
                        <li class="slide">
                            <a class="side-menu__item" href="{{$sub['url']}}" @if(count($sub['children']) > 0) data-bs-toggle="slide" @endif >
                                {!! $sub['icon'] !!}
                                <span class="side-menu__label">{{$sub['name']}}</span>
                                @if(count($sub['children']) > 0)
                                    <i class="angle fe fe-chevron-down"></i>
                                @endif
                            </a>
                            @if(count($sub['children']) > 0)
                                <ul class="slide-menu">
                                    @foreach($sub['children'] as $child)
                                        @can($child['permission'] || empty($menu['permission']))
                                            <li><a class="slide-item" href="{{$child['url']}}">{{$child['name']}}</a></li>
                                        @endcan
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endcan
            @endforeach
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
