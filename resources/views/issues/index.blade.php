@extends('layout')

@section('content')
    {{-- ВАРИАНТ ВЫВОДА КАРТОЧКАМИ --}}
    <div class="card-deck">
        @foreach ($issues as $issue)   
            <div class="card bg-light mb-5" style="min-width: 15rem; max-width: 15rem;"">
                <div class="card-header {{ $issue->is_client ? 'bg-danger' : 'bg-primary' }}  text-center">
                    <a class="text-white align-middle " href="/issues/{{ $issue->id }}">
                        Заявка № {{ $issue->id }} <small>{{ $issue->is_client ? '(наш клиент)' : '' }}</small>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text"> от <strong>{{ $issue->organization ? $issue->organization : $issue->name }}</strong> <br>
                    для {{ $issue->employee->name }}
                         </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $issue->updated_at }}</small>
              </div>
            </div>  
        @endforeach
    </div>

    <div class="navigation">
        {{ $issues->links() }}
    </div>

    {{-- ВАРИАНТ ВЫВОДА СПИСКОМ --}}

    {{-- <div class="card">
        <div class="card-header">Текущие задачки по проекту</div>
            <div class="card-body">
                <ul class="list-group">
                @foreach ($issues as $issue)
                    <li class="list-group-item">
                        <a href="/issues/{{ $issue->id }}">
                            Заявка № {{ $issue->id }}
                             от {{ $issue->organization ? $issue->organization : $issue->name }}
                            для {{ $issue->employee->name }}</a>
                    </li>
                @endforeach
                </ul>
                <p></p>
                <div class="navigation">
                    {{ $issues->links() }}
                </div>
            </div>
        </div>
    </div> --}}


    
    <hr>
    
    <a href="/issues/create" class="button is-link">Добавить заявку</a>        

    {{-- <div class="box">
            <ul>
                @foreach ($issues as $issue)
                    <li>
                        <a href="/issues/{{ $issue->id }}">
                            Заявка № {{ $issue->id }}
                            от {{ $issue->organization ? $issue->organization : $issue->name }}
                            для {{ $issue->employee->name }}</a>
                    </li>
                @endforeach
            </ul>            
        
            <br>
        <div class="columns is-mobile">
            <div class="box column is-2">
                {{ $issues->links() }}
            </div>
        </div>

        <hr>
        <a href="/issues/create" class="button is-link">Добавить заявку</a>
    </div> --}}
@endsection