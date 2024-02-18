@extends('template.template')

@section('content')
    <div id="carrousel">
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" class="mindcode">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <a href="{{ route('world', 1) }}"><img src="{{ asset('images/mundo1.svg') }}" alt="mundo1"></a>
                    <a href="{{ route('world', 2) }}"><img src="{{ asset('images/mundo2.svg') }}" alt="mundo2"></a>
                    <a href="{{ route('world', 3) }}"><img src="{{ asset('images/mundo3.svg') }}" alt="mundo3"></a>
                    <a href="{{ route('world', 4) }}"><img src="{{ asset('images/mundo4.svg') }}" alt="mundo4"></a>
                    <a href="{{ route('world', 5) }}"><img src="{{ asset('images/mundo5.svg') }}" alt="mundo5"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
