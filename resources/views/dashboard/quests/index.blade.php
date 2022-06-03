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
                    <h3 class="box-title">List Soal</h3>

                    @if(session()->has('success')) <div class="alert alert-success">{{ session('success') }}</div>@endif

                    <a href="/quest/create" class="text-white btn btn-primary">Tambah Soal Baru</a>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr class="text-center">
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Soal</th>
                                    <th class="border-top-0">A</th>
                                    <th class="border-top-0">B</th>
                                    <th class="border-top-0">C</th>
                                    <th class="border-top-0">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td>{{ $question->a }}</td>
                                    <td>{{ $question->b }}</td>
                                    <td >{{ $question->c }}</td>
                                    <td class=" text-center text-uppercase">{{ $question->answer }}</td>
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
