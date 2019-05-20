@extends('layout')

    @section('content')

        <div>
            <h1 class="title">{{ $employee->name }}</h1>
            <p>Должность {{ $employee->position }}</p>
        </div>
        
        <hr>

        <div class="row">
                <a class="btn btn-primary" href="/employees/{{ $employee->id }}/edit">Редактировать</a>
    
                <form method="POST" action="/employees/{{ $employee->id }}">
                    @method('DELETE')
                    @csrf          
                    <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
        </div> 

    @endsection