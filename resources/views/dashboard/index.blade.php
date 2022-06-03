@extends('dashboard.layouts.main-dashboard')
@section('content')
@include('dashboard.partials.preload-dashboard')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('dashboard.partials.leftbar-dashboard')

    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
            <h3 class="col mt-2">Selamat Datang Zuhal</h3>
        </div>
    </div>

</div>
@endsection
