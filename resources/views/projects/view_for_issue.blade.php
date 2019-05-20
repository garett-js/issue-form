@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">Текущие задачки по проекту</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($project->tasks as $task)
                            <li class="list-group-item {{ $task->completed ? 'list-group-item-secondary' : 'list-group-item-primary' }}">
                                
                                <form 
                                    method="POST" 
                                    action="/completed-tasks/{{ $task->id }}" >
                                    
                                    @if ($task->completed)
                                        @method('DELETE')
                                    @endif
                                        
                                    @csrf
                                    <div class="form-check">
                                        <input 
                                            type="checkbox" 
                                            name="completed" 
                                            class="form-check-input"
                                            onChange="this.form.submit()" 
                                            {{ $task->completed ? 'checked' : '' }}> 
                                        <label 
                                            class="form-check-label {{ $task->completed ? 'is-complete' : '' }}" 
                                            for="completed">{{ $task->description }}
                                        </label>  
                                    </div>  
                                </form>
                            </li>
                        @endforeach
                    </ul>
                
                    <hr>
                    
                    <form 
                        action="/projects/{{ $project->id }}/tasks" 
                        method="post">
                        @csrf
                
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="description" 
                                class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" 
                                value="{{ old('description') }}"
                                placeholder="Новая задача">
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>

                        @include('_errors')
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">Инструменты</div>
                <div class="card-body">
                    <p><strong>Альфа версия</strong> модуля "приём заявок" для сайта ax-online.ru</p>
                    <p>Backend: <strong>PHP7</strong> / <strong>Laravel5.7</strong> / <strong>MySQL</strong>
                    <p>Frontend: <strong>Bootsrtap4</strong> / </strong>Vue.js</strong>
                    <img src="/images/cat-logo.jpeg" alt="" width="100%">
                </div>
            </div>
        </div>
    </div> 
@endsection