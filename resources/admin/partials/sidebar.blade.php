<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{route('admin.dashbord')}}" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo.png')}}" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo.png')}}" class="img-fluid pt-2 px-4">
            </span>
        </a>
    </div>

    <div class="h-100" data-simplebar>

        <!-- User box -->
        {{-- <div class="user-box text-center">
            <img src="../assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="#" class="text-reset dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Nik Patel</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-reset">Admin Head</p>
        </div> --}}

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li class="menu-title">کاربران</li>

                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarDashboards" class="waves-effect">
                        <i class="ri-user-3-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.users') }}</span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.users.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.user.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">پایگاه دانش و آموزشی</li>

                <li>
                    <a href="#sidebarDashboards1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarDashboards1" class="waves-effect">
                        <i class="ri-book-mark-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.categories') }}</span>
                    </a>
                    <div class="collapse" id="sidebarDashboards1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.category.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.category.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarDashboards2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarDashboards2" class="waves-effect">
                        <i class="ri-file-copy-2-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.posts') }}</span>
                    </a>
                    <div class="collapse" id="sidebarDashboards2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.post.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.post.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">محصولات</li>

                <li>
                    <a href="#sidebarCategoryProducts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarCategoryProducts" class="waves-effect">
                        <i class="ri-book-mark-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.categories') }}</span>
                    </a>
                    <div class="collapse" id="sidebarCategoryProducts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.categoryProduct.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.categoryProduct.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarProducts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarProducts" class="waves-effect">
                        <i class="ri-store-2-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.products') }}</span>
                    </a>
                    <div class="collapse" id="sidebarProducts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.product.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.product.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarMedia" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarMedia" class="waves-effect">
                        <i class="ri-store-2-line"></i>
                        {{-- <span class="badge bg-success rounded-pill float-end">3</span> --}}
                        <span class="menu-arrow"></span>
                        <span>{{ __('titles.media') }}</span>
                    </a>
                    <div class="collapse" id="sidebarMedia">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.media.list')}}">{{ __('titles.list') }}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.media.create')}}">{{ __('titles.add') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
