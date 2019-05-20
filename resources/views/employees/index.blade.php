@extends('layout')

@section('content')
    <div class="row justify-content-left">
        <div>
        <h2>Сотрудники:</h2>
        <ul class="list-group">
            @foreach ($employees as $employee)
            <li class="list-group-item">
            <a href="/employees/{{ $employee->id }}">{{ $employee->name }}</a> <br>
            <small>{{ $employee->position }}</small>
            </li>
            @endforeach
        </ul>  

        <hr>
        <a href="/employees/create" class="btn btn-primary">Добавить сотрудника</a>
    </div>
    </div>
@endsection