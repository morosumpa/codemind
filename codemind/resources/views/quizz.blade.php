@extends('template.template')

@section('css')
    @if ($question->id == 1)
        <link rel="stylesheet" href="{{ asset('css/git.css') }}">
    @elseif($question->id == 2)
        <link rel="stylesheet" href="{{ asset('css/htmlcss.css') }}">
    @elseif($question->id == 3)
        <link rel="stylesheet" href="{{ asset('css/php.css') }}">
    @elseif($question->id == 4)
        <link rel="stylesheet" href="{{ asset('css/javascript.css') }}">
    @elseif($question->id == 5)
        <link rel="stylesheet" href="{{ asset('css/java.css') }}">
    @endif
@endsection

@section('content')
    <h1 class="fw-light">Mundo</h1>
    <h3 class="fw-light text-center">{{ $question->QuestionText }}</h3>
    <img src="" alt="Codigo">

    <form action="@if ($question->id != 10) @else @endif" method="POST">
        <div class="row justify-content-center align-items-center gap-2">
            @foreach ($answers as $answer)
                <div class="col-12 col-xl-2 border p-3 rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="respuesta" id="" />
                        <label class="form-check-label" for=""> {{ $answer->AnswerText }} </label>
                    </div>

                </div>
            @endforeach

            <div class="row justify-content-center align-items-center g-2">
                <div class="col-3 offset-9">
                    @if ($question->id != 10)
                        <button type="submit" class="btn btn-primary">
                            Siguiente
                        </button>
                    @else
                        <button type="submit" class="btn btn-primary ">
                            Terminar
                        </button>
                    @endif
                </div>

            </div>

        </div>
    </form>
@endsection
