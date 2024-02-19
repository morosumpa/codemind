@extends('template.template')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 text-center mb-5">
                <h1 class="fw-light text-center mb-4">Jugar</h1>

                <a name="" id="" class="btn"
                    href="{{ route('question', $worldFirstQuestion->id) }}" role="button"><img src="{{asset('images/icons/play-button-svgrepo-com.svg')}}" alt=""></a>

            </div>
            <div class="col-12 border rounded p-3 text-center mt-5">
                <h1 class="fw-light">Máxima puntuación</h1>
                @if ($userAchievement)
                    @switch($userAchievement->tier)
                        @case('Bronce')
                            <img src="{{ asset('images/achievements/bronze-medal-svgrepo-com.svg') }}" alt="">
                            <p>Menos del 30% de aciertos</p>
                        @break

                        @case('Plata')
                            <img src="{{ asset('images/achievements/silver-medal-svgrepo-com.svg') }}" alt="">
                            <p>Mas del 30% de aciertos</p>
                        @break

                        @case('Oro')
                            <img src="{{ asset('images/achievements/gold-medal-svgrepo-com.svg') }}" alt="">
                            <p>Mas del 50% de aciertos</p>
                        @break

                        @case('Diamante')
                            <img src="{{ asset('images/achievements/diamond-svgrepo-com.svg') }}" alt="">
                            <p>Mas del 70% de aciertos</p>
                        @break

                        @case('Platino')
                            <img src="{{ asset('images/achievements/crystal-svgrepo-com.svg') }}" alt="">
                            <p>100% de aciertos</p>
                        @break

                        @default
                    @endswitch
                @else
                    <p class="text-center">Todavía no tienes logros</p>
                @endif
            </div>

        </div>

    </div>
@endsection
