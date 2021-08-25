<div class="sidebar capsule--rounded bg_img overlay--dark"
     data-background="{{asset('assets/admin/images/sidebar/2.jpg')}}">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            @php
                $logo   = getOwnerLogo(auth()->guard('supervisor')->user()->owner);
            @endphp

            <a href="{{route('supervisor.dashboard')}}" class="sidebar__main-logo">
                <img src="{{ $logo }}" alt="@lang('image')">
            </a>
            <a href="{{route('supervisor.dashboard')}}" class="sidebar__logo-shape">
                <img src="{{ $logo }}" alt="@lang('image')">
            </a>

            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <ul class="sidebar__menu">

                    <li class="sidebar-menu-item {{menuActive(['supervisor.trips*', 'supervisor.dashboard'])}}">
                        <a href="{{route('supervisor.trips')}}" class="nav-link ">
                            <i class="menu-icon las la-bus"></i>
                            <span class="menu-title">@lang('Trips')</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</div>
<!-- sidebar end -->
