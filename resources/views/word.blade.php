@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('saveWord') }}" method="post">
                @csrf
                <div class="col-4">
                    単語：<input type="text" name="word">
                </div>
                <div class="col-4">
                    意味：<textarea name="meaning"></textarea>
                </div>
                <div class="col-8 text-center">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($word as $word)
                <div class="card col-12 col-md-3">
                    単語：{{ $word->word }}<br>
                    意味：{!! nl2br(e($word->meaning)) !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection
