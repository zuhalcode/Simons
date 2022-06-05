@extends('layouts.main')
@section('content')
    <section class="container bg-white rounded-1">
        <section class="row ">
        <h4 class="text-center mt-2">Tes Teori</h4>
        <section class="col-12 mb-3">
            <form class="form-container" action="/new-applicant/validate" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="">
                            @foreach ($questions as $question)
                            <h5 class="fs-4">{{ $loop->iteration }}. <span class="fs-5">{{ $question->question }}</span></h5>
                            <div class="mt-2 mb-3">
                                <div class="form-check" style="" role="button">
                                    <input class="form-check-input" type="radio" name="answer{{ $loop->iteration }}" id="a{{ $loop->iteration }}" value="a">
                                    <label class="form-check-label" for="a{{ $loop->iteration }}">
                                        A. {{ $question->a }}
                                    </label>
                                </div>
                                <div class="form-check" style="" role="button">
                                    <input class="form-check-input" type="radio" name="answer{{ $loop->iteration }}" id="b{{ $loop->iteration }}" value="b">
                                    <label class="form-check-label" for="b{{ $loop->iteration }}">
                                        B. {{ $question->b }}
                                    </label>
                                </div>
                                <div class="form-check" style="" role="button">
                                    <input class="form-check-input" type="radio" name="answer{{ $loop->iteration }}" id="c{{ $loop->iteration }}" value="c">
                                    <label class="form-check-label" for="c{{ $loop->iteration }}">
                                        C. {{ $question->c }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Selesai</button>
            </form>
        </section>
        </section>
    </section>
</div>
<script>
    // check if checked vanilla js
    

    

</script>
@endsection