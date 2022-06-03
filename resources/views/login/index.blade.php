@extends('layouts.main')
@section('content')
<div class="">
	<div class="slider-item hero-area" style="">
		<div class="w-50 mt-20 ">
			<div class="row d-flex justify-content-center align-items-center bg-transparent">
				<div class="col-md-8 col-lg-6 col-xl-8 ">

					@if(session()->has('success'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							{{ session('success') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif

					@if(session()->has('loginError'))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							{{ session('loginError') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif

					<form action="/login" method="post" class="bg-light px-3 pb-2 rounded ">
						@csrf
						<h2 class="fw-bold fs-2 text-dark pt-3 text-center ">Halaman Login</h2>
						<!-- Email input -->
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example3">Alamat Email</label>
							<input type="text" name="email" value="{{ old('email') }}" id="form3Example3" class="form-control form-control-lg
							@error('email') is-invalid @enderror"
							placeholder="Masukkan alamat email anda" />
							@error('email')
                                <label class="invalid-feedback">{{ $message }}</label>
                            @enderror
						</div>
				
						<!-- Password input -->
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example4">Password</label>
							<input type="password" name="password" id="form3Example4" class="form-control form-control-lg
							@error('email') is-invalid @enderror"
							placeholder="Masukkan password" />
							@error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
						</div>

						<div class="text-center mt-2 pt-2">
							<button type="submit" class="btn btn-primary btn-lg"
							style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
							<h5 class=" text-dark font-weight-normal mt-2 pt-1 mb-0">Belum memiliki akun? 
								<a href="/register" class="">Daftar</a>
							</h5>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection