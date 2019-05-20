@extends('layout')

@section('content')
  <h1 class="title">Проекты - список:</h1>
  <hr>

  <div class="box">
    <ul>
      @foreach ($projects as $pro)
        <li>
          <a href="/projects/{{ $pro->id }}">{{ $pro->title }}</a>
        </li>
      @endforeach
    </ul>    
    
    <hr>

    <a href="/projects/create" class="button is-link">Создать</a>

  </div>
  
  

@endsection
