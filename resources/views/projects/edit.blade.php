@extends('layout')

@section('content')

<form method="POST" action="/projects/{{ $project->id }}">
  @method('PATCH')
  @csrf
  
  <div class="field">
    <label class="label">Title</label>
    <div class="control">
      <input name="title" class="input" type="text" placeholder="Text input" value="{{ $project->title }}">
    </div>
  </div>

  <div class="field">
    <label class="label">Description</label>
    <div class="control">
      <textarea name="description" class="textarea" placeholder="Textarea">
        {{ $project->description }}
      </textarea>
    </div>
  </div>

  <div class="field is-grouped">
    <div class="control">
      <button type="submit" class="button is-info">Обновить</button>
    </div>
  </div>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
  @method('DELETE')
  @csrf

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-danger">Удалить</button>
    </div>
  </div>  
</form>

@endsection
