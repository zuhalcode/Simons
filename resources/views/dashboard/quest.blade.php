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
                    <a href="/dashboard/quest" class="text-white btn btn-primary">Tambah Soal Baru</a>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Soal</th>
                                    <th class="border-top-0">A</th>
                                    <th class="border-top-0">B</th>
                                    <th class="border-top-0">C</th>
                                    <th class="border-top-0">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Anda berjalan dengan kecepatan kurang lebih 30 km/jam mendekati persimpangan yang diatur oleh lampu lalu lintas. Ketika lampu berupbah dari warna hijau ke kuning, apa yang anda lakukan.</td>
                                    <td>Berhenti</td>
                                    <td>Jalan terus</td>
                                    <td>Bersiap-siap berhenti karena belum melewati garis berhenti </td>
                                    <td>C</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
