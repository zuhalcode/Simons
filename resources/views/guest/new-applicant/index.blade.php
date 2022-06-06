@extends('layouts.main')
@section('content')
    <section class="container bg-white rounded-1">
        <section class="row ">
        <h4 class="text-center mt-2">Form Pendaftaran</h4>
        <section class="col-12 mb-3">
            <form class="form-container" action="/new-applicant" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
                </div>

                <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input type="text" class="form-control" name="email" id="InputEmail" value="{{ auth()->user()->email }}" readonly>
                </div>

                <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" class="form-control" id="NIK" name="NIK" value="{{ auth()->user()->NIK }}" readonly>
                </div>

                <div class="form-group">
                    <label for="birthday">Tanggal Lahir</label>
                    <input type="date" name="birthday" value="{{ old('birthday') }}" class="form-control @error('birthday') is-invalid @enderror" id="birthday"/>
                </div>

                <div class="form-group">
                    <label for="birthplace">Tempat Lahir</label>
                    <input type="text" name="birthplace" value="{{ old('birthplace') }}" class="form-control @error('birthplace') is-invalid @enderror" id="birthplace" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="08xxxxxxxxx">
                </div>

                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat" >
                </div>

                <div class="form-group">
                    <label for="country">Kewarganegaraan</label>
                    <input type="text" name="country" class="form-control " id="country" value="Indonesia" readonly>
                </div>

                <div class="form-group">
                    <label for="province">Provinsi</label>
                    <input type="text" name="province" value="{{ old('province') }}" class="form-control @error('province') is-invalid @enderror" id="province" placeholder="Provinsi" />
                </div>

                <div class="form-group">
                    <label for="city">Kota</label>
                    <input type="text" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="Kota" />
                </div>
                
                <div class="form-outline">
                    <label class="form-label text-dark" for="type">Golongan Sim</label>
                    <select class="form-select" name="type" id="type">
                        <option value="A">A</option>
                        <option value="BI">B I</option>
                        <option value="BII">B II</option>
                        <option value="C">C </option>
                        <option value="CI">C I</option>
                        <option value="CII">C II</option>
                        <option value="D">D</option>
                        <option value="DI">D I</option>
                    </select>
                </div>

                <div class="form-outline">
                    <label class="form-label text-dark" for="religion">Agama</label>
                    <select class="form-select" name="religion" id="religion">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                    </select>
                </div>

                <div class="form-outline ">
                    <label class="form-label text-dark" for="gender">Jenis Kelamin</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="education">Pendidikan Terakhir</label>
                    <input type="text" value="{{ old('education') }}" class="form-control @error('education') is-invalid @enderror" name="education" id="eductaion" placeholder="Pendidikan Terakhir">
                </div>

                <div class="form-group">
                    <label for="job">Pekerjaan</label>
                    <input type="text" value="{{ old('job') }}" class="form-control @error('job') is-invalid @enderror" id="job" name="job" placeholder="Pekerjaan">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </form>
        </section>
        </section>
    </section>
</div>
@endsection