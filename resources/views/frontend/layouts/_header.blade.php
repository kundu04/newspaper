<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('frontend/asset/img/core-img/logo.png')}}" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
{{--                            <div class="login d-flex">--}}
{{--                                <a href="#">Login</a>--}}
{{--                                <a href="#">Register</a>--}}
{{--                            </div>--}}
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="{{route('search')}}" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="dashboard.blade.php"><img src="{{asset('frontend/asset/img/core-img/logo.png')}}" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->

                    @include('frontend/layouts/_topNav')
                    <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
