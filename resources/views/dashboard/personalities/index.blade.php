@extends('dashboard.layouts.main-dashboard')
@section('content')
@include('dashboard.partials.preload-dashboard')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('dashboard.partials.leftbar-dashboard')
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">List Soal Kepribadian</h3>

                    @if(session()->has('success')) <div class="alert alert-success">{{ session('success') }}</div>@endif

                    <a href="/personality/create" class="text-white btn btn-primary">Tambah Soal Baru</a>
                    <a href="/quest" class="text-white btn btn-primary">List Soal Teori</a>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr class="">
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Soal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $question->question }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
