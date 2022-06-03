@extends('dashboard.layouts.main-dashboard')
@section('content')
@include('dashboard.partials.preload-dashboard')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('dashboard.partials.leftbar-dashboard')
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="col-sm-12">
                <div class="white-box mb-5">
                    <h3 class="box-title">Tambah Soal Baru</h3>

                    <form action="/personality" method="post">
						@csrf
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="question">Pertanyaan</label>
							<textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="2"></textarea>
							@error('question')
								<label class="invalid-feedback">{{ $message }}</label>
							@enderror
						</div>

                        <button type="submit" class="text-white btn btn-primary w-50 text-bold text-uppercase">Tambah Soal Baru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
