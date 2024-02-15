@extends('template.template')

@section('content')
    <div class="container">

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 col-md-4">
                <h1 class="fw-light">Mis logros</h1>
                @if ($userAchievement)
                <p>{{$userAchievement->tier}}</p>
                @else
                    <p class="text-center">Todavía no tienes logros</p>
                @endif
            </div>
            <div class="col-12 col-md-8 text-center">
                <h1 class="fw-light text-center">Jugar</h1>

                <a name="" id="" class="btn btn-primary" href="{{route("question",$worldFirstQuestion->id)}}" role="button">Primera pregunta</a>

            </div>

        </div>

    </div>
@endsection
