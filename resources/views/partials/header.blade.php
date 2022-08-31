<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" class="logo-1" alt="لوگو"></a>
                <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" class="dark-logo-1" alt="لوگو"></a>
                <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" class="logo-2" alt="لوگو"></a>
                <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" class="dark-logo-2" alt="لوگو"></a>
            </div>
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
                <input class="form-control" placeholder="هر چیزی را جستجو کنید ..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
            </div>
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-link" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو کردن">
                            <span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link resp-btn">
											<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
										</button>
									</span>
                        </div>
                    </form>
                </div>
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
                </div>

                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img alt="" src="{{asset('assets/img/faces/profile-no.png')}}"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/profile-no.png')}}" class=""></div>
                                <div class="ms-3 my-auto">
                                    <h6>{{auth()->user()->name}} {{auth()->user()->surname}}</h6><span>{{auth()->user()->getRoleNames()[0]}}</span>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#"><i class="bx bx-user-circle"></i>مشخصات</a>
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="bx bx-log-out"></i> خروج از سیستم</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
