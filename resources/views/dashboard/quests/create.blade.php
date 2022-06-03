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
                    <form action="/quest" method="post">
						@csrf
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="question">Pertanyaan</label>
							<textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="2">{{ old('question') }}</textarea>
							@error('question')
								<label class="invalid-feedback">{{ $message }}</label>
							@enderror
						</div>
				
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="pilA">Pilihan A</label>
							<textarea name="a"  id="pilA" class="form-control @error('a') is-invalid @enderror" rows="2">{{ old('a') }}</textarea>
							@error('a')
								<label class="invalid-feedback">{{ $message }}</label>
							@enderror
						</div>

						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="pilB">Pilihan B</label>
							<textarea  name="b" id="pilB" class="form-control @error('b') is-invalid @enderror" rows="2">{{ old('b') }}</textarea>
							@error('b')
								<label class="invalid-feedback">{{ $message }}</label>
							@enderror
						</div>

						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="pilC">Pilihan C</label>
							<textarea name="c" id="pilC" class="form-control @error('c') is-invalid @enderror" rows="2" >{{ old('c') }}</textarea>
							@error('c')
								<label class="invalid-feedback">{{ $message }}</label>
							@enderror
						</div>
                        
						<div class="form-outline mb-5">
							<label class="form-label text-dark" for="answer">Jawaban</label>
							<select class="form-select" name="answer" id="">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                            </select>
						</div>

						<div class="form-outline mb-5">
							<label class="form-label text-dark" for="answer">Jenis Soal</label>
							<select class="form-select" name="answer" id="">
                                <option value="kepribadian">Kepribadian</option>
                                <option value="teori">Teori</option>
                            </select>
						</div>

                        <button type="submit" class="text-white btn btn-primary w-50 text-bold text-uppercase">Tambah Soal Baru</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
