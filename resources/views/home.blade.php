@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @guest
                <a href="{{ route('login') }}">login</a>
                <a href="{{ route('register') }}">register</a>
            @else
                <div class="col-6 text-center">
                    <a href="{{ route('question') }}">Question</a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('word') }}">Word</a>
                </div>
            @endguest
        </div>
    </div>
@endsection
