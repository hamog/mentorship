<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.html">
            <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
            <img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img dark-logo" alt="Dayonelogo">
            <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Dayonelogo">
            <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
        </a>
    </div>
    <div class="app-sidebar3">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="assets/images/users/16.jpg" alt="user-img" class="avatar-xxl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-2">Abigali kelly</h5>
                    <span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="slide">
                <a class="side-menu__item"  href="">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">داشبورد</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ route('admin.menu.groups') }}">
                    <i class="feather feather-list sidemenu_icon"></i>
                    <span class="side-menu__label">مدیریت منوها</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ route('admin.surgeries.index') }}">
                    <i class="feather feather-list sidemenu_icon"></i>
                    <span class="side-menu__label">مدیریت جراحی ها</span>
                </a>
            </li>
{{--            <li class="slide">--}}
{{--                <a class="side-menu__item" data-toggle="slide" href="#">--}}
{{--                    <i class="feather  feather-users sidemenu_icon"></i>--}}
{{--                    <span class="side-menu__label">دسته بندی ها</span><i class="angle fa fa-angle-left"></i>--}}
{{--                </a>--}}
{{--                <ul class="slide-menu">--}}
{{--                    <li><a href="index2.html" class="slide-item"></a></li>--}}
{{--                    <li><a href="employee-attendance.html" class="slide-item">Attendance</a></li>--}}
{{--                    <li><a href="employee-leaves.html" class="slide-item">Apply Leaves </a></li>--}}
{{--                    <li><a href="employee-myleaves.html" class="slide-item">My Leaves </a></li>--}}
{{--                    <li><a href="employee-payslips.html" class="slide-item">Payslips </a></li>--}}
{{--                    <li><a href="employee-expenses.html" class="slide-item">Expenses</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
</aside>
