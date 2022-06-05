@extends('layouts.main')
@section('content')
    <section class="container bg-white rounded-1">
        <section class="row ">
            <h2 class="text-center mt-2 ">Hasil dan Pengambilan Foto</h2>
            <h4 class="text-center mt-2 ">Nilai Tes Teori : {{ $mark }}</h4>
            <h2 class="text-center mt-2 ">Ambil Foto</h2>

            <div class="d-flex justify-content-center my-2 gap-2 w-100" id="canvas" width="400" height="400">
                <img id="captured" src="" alt="">
                <div class="" id="my_camera" 
                style="
                width: 320px;
                height:240px; 
                background-image:url('{{ asset('images/default-photo.png') }}');
                background-size: cover;
                "></div>
            </div>

            <div class="controller d-flex justify-content-center gap-2 my-2">
                <button id="snap" class="btn btn-success" onclick="saveSnap();">Ambil Foto</button>
                <button class="btn btn-danger" onclick="startCamera();">Mulai Kamera</button>
            </div>


            <section class="col-12 my-3">
                <button type="submit" class="btn btn-primary btn-block" onclick="submit()">Selesai</button>
                {{-- <form class="form-container" action="/" method="get" onsubmit="submit();">
                    @csrf --}}
                {{-- </form> --}}
            </section>
        </section>
    </section>
</div>

<script src="{{ asset('js/webcam.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function startCamera() {
        document.getElementById('my_camera').classList.remove('bg-secondary');
        document.getElementById('captured').src = ''
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
    }

    function saveSnap() {
        Webcam.snap( function(data_uri) {
            document.getElementById('captured').src = data_uri;
            document.getElementById('my_camera').classList.add('bg-secondary');
        });
        Webcam.reset()
    }

    function submit() {
        Swal.fire(
            'Selamat anda telah selesai tes teori!',
            'Informasi selanjutnya akan dikirim ke email anda.',
            'success'
        ).then(setTimeout(() => window.location.href = '/', 7000));
    }

</script>
@endsection