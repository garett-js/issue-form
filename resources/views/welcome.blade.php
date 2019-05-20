@extends('layout')

@section('welcome')
    <h1>Hello Laravel !!!</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection