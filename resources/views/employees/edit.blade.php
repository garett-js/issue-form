@extends('layout')

@section('content')

<div class="card bg-light">
    <h5 class="card-header text-center">Добавить сотрудника</h5>

    <div class="card-body">
        <form method="POST" action="/employees/{{ $employee->id }}">
            @method('PATCH')
            @csrf
            
            <div class="form-group">
                @include('_errors')
                <label>ФИО</label>
                <input name="name" 
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                        type="text" 
                        placeholder="Напишите ФИО сотрудника"
                        value="{{ $employee->name }}">
            </div>
            
            <div class="form-group">
                <label>Должность</label>
                <input name="position" 
                        class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}" 
                        type="text" 
                        placeholder="Напишите должность сотрудника"
                        value="{{ $employee->position }}">
            </div>

            <button class="btn btn-primary" type="submit">Редактировать</button>

        </form>
    </div>
</div>

@endsection
