@extends('template.template')

@section('content')
    <h1 class="fw-light">Mundo</h1>

    <h3 class="fw-light text-center">{{ $question->QuestionText }}</h3>

    <img src="" alt="Codigo">

    <form
        action="@if ($question->id != 10) {{ route('saveUserAnswer', $question->id) }} @else {{ route('checkAnswers', 1) }} @endif"
        method="POST">

        @csrf
        <div class="row justify-content-center align-items-center gap-2">
            @foreach ($answers as $answer)
                <div class="col-12 col-xl-2 border p-3 rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_id" id="answer_id"
                            value="{{ $answer->id }}" />
                        <label class="form-check-label" for=""> {{ $answer->AnswerText }} </label>
                    </div>

                </div>
            @endforeach

            <input class="form-check-input" type="number" name="question_id" id="question_id" value="{{ $question->id }}" hidden />

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
