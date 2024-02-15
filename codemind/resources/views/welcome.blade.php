@extends('template.template')

@section('content')
    <div class="app">

        <div class="cardList">
            <button class="cardList__btn btn btn--left">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </button>

            <div class="cards__wrapper">
                <div class="card current--card">
                    <div class="card__image">
                        <img src="{{ asset('images/mundo1.svg') }}" class="w-50" alt="mundo1">
                    </div>
                </div>

                <div class="card next--card">
                    <div class="card__image">
                        <img src="{{ asset('images/mundo2.svg') }}" class="w-50" alt="mundo2">
                    </div>
                </div>

                <div class="card next--card">
                    <div class="card__image">
                        <img src="{{ asset('images/mundo3.svg') }}" class="w-50" alt="mundo3">
                    </div>
                </div>

                <div class="card next--card">
                    <div class="card__image">
                        <img src="{{ asset('images/mundo4.svg') }}" class="w-50" alt="mundo4">
                    </div>
                </div>

                <div class="card previous--card">
                    <div class="card__image">
                        <img src="{{ asset('images/mundo5.svg') }}" class="w-50" alt="mundo5">
                    </div>
                </div>
            </div>

            <button class="cardList__btn btn btn--right">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>

        <div class="infoList">
            <div class="info__wrapper">
                <div class="info current--info">
                    <h1 class="text name">HTML/CSS</h1>
                </div>

                <div class="info next--info">
                    <h1 class="text name">GIT</h1>
                </div>

                <div class="info next--info">
                    <h1 class="text name">PHP</h1>
                </div>

                <div class="info next--info">
                    <h1 class="text name">JAVASCRIPT</h1>
                </div>

                <div class="info next--info">
                    <h1 class="text name">JAVA</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="loading__wrapper">
        <div class="loader--text">Loading...</div>
        <div class="loader">
            <span></span>
        </div>
    </div>
@endsection
