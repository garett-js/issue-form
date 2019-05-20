@extends('layout')

    @section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-7">

        <div class="card">
            <div class="card-body">
                <h2 class="title">Заявка № {{ $issue->id }}</h2>
                <p class="card-text">
                    Дата заявки: {{ $issue->created_at }}     <br>
                    Вопрос к <strong>{{ $issue->employee->name }}</strong>
                </p>
            </div>
        </div>
 
        <hr>

        <div class="card">
            <div class="card-body">
                    <p class="card-text">Организация: <strong>{{ $issue->organization }}</strong> {{ $issue->is_client ? '(наш клиент)' : '' }} <br>
                    Номер телефона: <strong>{{ $issue->phone_number }}</strong> <br>  
                    ФИО клиента: <strong>{{ $issue->name }}</strong></p>
            </div>
        </div>

        <hr>

        <div class="card">
                <div class="card-body">
                        <p class="card-text"><strong>Проблема:</strong> <br>
                        {{ $issue->issue }}</p>
                        <p class="card-text"><strong>Скриншот:</strong></p>
                        <img src="{{ $issue->image }}" alt="" width="50%" heigth="50%">
                        <hr>
                        <p class="card-text">Версия 1С: <strong>{{ $issue->ver_1c }}</strong> <br>
                        Версия платформы 1С: <strong>{{ $issue->ver_platform }}</strong> <br>
                        Возможность удаленного доступа: <strong>{{ $issue->is_remote ? 'Есть' : 'Нет' }}</strong></p>

                        <hr>
                        <div class="row">
                            <a class="btn btn-primary" href="/issues/{{ $issue->id }}/edit">Редактировать</a>
                
                            <form method="POST" action="/issues/{{ $issue->id }}">
                                @method('DELETE')
                                @csrf          
                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </div>     
                </div>
        </div>

        <hr>
    </div>
    </div>
    @endsection