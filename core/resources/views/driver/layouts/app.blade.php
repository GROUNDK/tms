@extends('layouts.master')

@section('content')
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('driver.partials.sidenav')
        @include('driver.partials.topnav')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                @include('admin.partials.breadcrumb')

                @yield('panel')


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>

@endsection
