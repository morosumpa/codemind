@extends('template.template')

@section('content')
    <div id="carrousel">
        <div class="container">
            <div class="title col-md-12 text-center">MINDCODE</div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <a href=""><img src="{{ asset('images/mundo1.svg') }}" alt="mundo1"></a>
                    <a href=""><img src="{{ asset('images/mundo2.svg') }}" alt="mundo2"></a>
                    <a href=""><img src="{{ asset('images/mundo3.svg') }}" alt="mundo3"></a>
                    <a href=""><img src="{{ asset('images/mundo4.svg') }}" alt="mundo4"></a>
                    <a href=""><img src="{{ asset('images/mundo5.svg') }}" alt="mundo5"></a>
                </div>
            </div>
            {{-- <div class="text-center">
                <button id="play-carousel" type="button" class="btn btn-dark">Play</button>
                <div class="status"></div>
            </div> --}}
        </div>
    </div>
@endsection
