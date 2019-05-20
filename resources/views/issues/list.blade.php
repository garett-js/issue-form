@extends('layout')

@section('content')

        @foreach ($issues as $issue)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="/issues/{{ $issue->id }}">
                        Заявка № {{ $issue->id }}
                        от {{ $issue->organization ? $issue->organization : $issue->name }}
                        для {{ $issue->employee->name }}</a>
                </li>
            </ul>
                
        @endforeach

    <div class="navigation">
        {{ $issues->links() }}
    </div>
    
    <hr>
    
    <a href="/issues/create" class="button is-link">Добавить заявку</a>        

@endsection