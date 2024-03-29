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
    <div class="container p-5">
        <h3 class="fw-light text-center p-3 bg-light rounded shadow-lg mb-3">{{ $question->QuestionText }}</h3>
        <div class="row justify-content-center align-items-center g-2 p-5">
            <div class="col-12 text-center">
                <img src="{{ asset('images/questions/' . $question->image) }}" class="img img-fluid rounded" alt="Codigo">
            </div>
        </div>

        <form action="{{ route('saveUserAnswer', $question->id) }}" method="POST">
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

                <input class="form-check-input" type="number" name="question_id" id="question_id"
                    value="{{ $question->id }}" hidden />

                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-3 offset-9">
                        @if ($question->id % 10 != 0)
                            <button type="submit" class="btn btn-verde p-2">
                                Siguiente
                            </button>
                        @else
                            <button type="submit" class="btn btn-verde ">
                                Terminar
                            </button>
                        @endif
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
