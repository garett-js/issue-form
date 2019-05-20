@extends('layout')

@section('page_title')
    {{ "Создать новый проект" }}
@endsection

@section('content')
  <h1 class="title">Создать новый проект</h1>

  <form method="POST" action="/projects">
    @csrf
    <div class="field">
      <label class="label">Название</label>
      <div class="control">
      <input name="title" 
        class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
        type="text" 
        placeholder="Напишите название проекта"
        value="{{ old('title') }}">
      </div>
    </div>

    <div class="field">
      <label class="label">Описание</label>
      <div class="control">
        <textarea name="description" 
          class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" 
          placeholder="Добавьте описание">{{ old('description') }}
        </textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-info">Создать</button>
      </div>
    </div>

    @include('_errors')

  </form>
@endsection
