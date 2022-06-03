@extends('layouts.main')
@section('content')
<div class="">
	<div class="slider-item hero-area" style="">
		<div class="w-50 mt-20 ">
			<div class="row d-flex justify-content-center align-items-center bg-transparent">
				<div class="col-md-8 col-lg-6 col-xl-8 ">
					<form action="/register" method="post" class="bg-light px-3 pb-2 rounded ">
                        @csrf
						<h3 class="fw-bold fs-2 text-dark mt-40 text-center pt-2">Halaman Registrasi</h3>

						<!-- Name input -->
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example3">Nama Lengkap</label>
							<input type="text" name="name" id="form3Example3" 
                            class="form-control @error('name') is-invalid @enderror" 
							placeholder="Masukkan nama lengkap anda" value="{{ old('name') }}" />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
						</div>

                        {{-- NIK input --}}
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example3">NIK</label>
							<input type="text" name="NIK" id="form3Example3" class="form-control
                            @error('NIK') is-invalid @enderror"
							placeholder="Masukkan NIK anda" value="{{ old('NIK') }}"/>
                            @error('NIK')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
						</div>

						<!-- Email input -->
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example3">Alamat Email</label>
							<input type="text" name="email" id="form3Example3" class="form-control 
                            @error('email') is-invalid @enderror"
							placeholder="Masukkan alamat Email anda" value="{{ old('email') }}"/>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
						</div>
				
						<!-- Password input -->
						<div class="form-outline mb-2">
							<label class="form-label text-dark" for="form3Example4">Password</label>
							<input type="password" name="password" id="form3Example4" class="form-control 
                            @error('password') is-invalid @enderror"
							placeholder="Masukkan password" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-primary btn-md w-100"
							style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
							<h6 class=" text-dark font-weight-normal mt-2 pt-1 mb-0">Sudah memiliki akun? 
								<a href="/login" class="">Login</a>
							</h6>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection