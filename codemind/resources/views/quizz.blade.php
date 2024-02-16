@extends('template.template')

@section('css')
    @if ($question->world_id == 1)
        <link rel="stylesheet" href="{{ asset('css/git.css') }}">
    @elseif($question->world_id == 2)
        <link rel="stylesheet" href="{{ asset('css/htmlcss.css') }}">
    @elseif($question->world_id == 3)
        <link rel="stylesheet" href="{{ asset('css/php.css') }}">
    @elseif($question->world_id == 4)
        <link rel="stylesheet" href="{{ asset('css/javascript.css') }}">
    @elseif($question->world_id == 5)
        <link rel="stylesheet" href="{{ asset('css/java.css') }}">
    @endif
@endsection

@section('content')
    <h3 class="fw-light text-center p-3 bg-light rounded shadow-lg mb-3">{{ $question->QuestionText }}</h3>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-12 text-center">
            <img src="{{ asset('images/html/' . $question->image) }}" class="img img-fluid rounded" alt="Codigo">

        </div>

    </div>



    <form
        action="@if ($question->id % 10 != 0) {{ route('saveUserAnswer', $question->id) }} @else {{ route('checkAnswers', $question->world_id) }} @endif"
        method="POST">

        @csrf
        <div class="row justify-content-center align-items-center gap-2 mt-5">
            @foreach ($answers as $answer)
                <div class="col-12 col-xl-2 border bg-light shadow-sm p-3 rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_id" id="answer_id"
                            value="{{ $answer->id }}" />
                        <label class="form-check-label" for=""> {{ $answer->AnswerText }} </label>
                    </div>

                </div>
            @endforeach

            <input class="form-check-input" type="number" name="question_id" id="question_id" value="{{ $question->id }}"
                hidden />

            <div class="row justify-content-center align-items-center g-2">
                <div class="col-3 offset-9">
                    @if ($question->id % 10 != 0)
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
