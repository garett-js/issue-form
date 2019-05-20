@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{ $project->description }}</div>

    <a href="/projects/{{ $project->id }}/edit">Редактировать</a> | 
    <a href="/projects/{{ $project->id }}">Удалить</a>
    
    <hr>
    <div class="box">
        <ul>
            @foreach ($project->tasks as $task)
                <li>
                <form 
                    method="POST" 
                    action="/completed-tasks/{{ $task->id }}" >
                   
                    @if ($task->completed)
                        @method('DELETE')
                    @endif
                    
                    @csrf
                        <label 
                            class="checkbox {{ $task->completed ? 'is-complete' : '' }}" 
                            for="completed">
                            <input 
                                type="checkbox" 
                                name="completed" 
                                onChange="this.form.submit()" 
                                {{ $task->completed ? 'checked' : '' }} >

                            {{ $task->description }}
                        </label>    
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <form 
        class="box"
        action="/projects/{{ $project->id }}/tasks" 
        method="post">
        @csrf

        <div class="field">
            <label for="description" class="label">Новая задача</label>

            <div class="control">
                <input 
                type="text" 
                name="description" 
                class="input {{ $errors->has('description') ? 'is-danger' : '' }}" 
                value="{{ old('description') }}"
                placeholder="Новая задача">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Добавить</button>
            </div>
        </div>

        @include('_errors')
    </form>
    
@endsection