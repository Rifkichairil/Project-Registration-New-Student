<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="{{route('dashboard')}}"><img src="{{asset('user_asset/assets/images/ppdb_2.png')}}" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('user_asset/assets/images/ppdb_2.png')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">

        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            {{-- <img src="images/faces/face28.jpg" alt="profile"/> --}}
            <p>admin</p>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
                <form action="{{route('logout')}}" method="post">
                    {!! csrf_field() !!}
                    <button type="submit" class="dropdown-item notify-item">
                        <i class="ti-power-off text-primary"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </a>

        </div>
        </li>

    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
    </button>
    </div>
</nav>
