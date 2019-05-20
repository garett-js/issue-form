<nav class="navbar navbar-dark bg-dark navbar-expand-lg"> {{-- fixed-top"> --}}

    <div class="container">
        <a class="navbar-brand" href="/">alpha-0.0.2</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarText">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Домой</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('issues.index') ? 'active' : '' }}" href="{{ route('issues.index') }}">Заявки</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('issues.create') ? 'active' : '' }}" href="{{ route('issues.create') }}">Создать заявку</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('employees.index') ? 'active' : '' }}" href="{{ route('employees.index') }}">Сотрудники</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('employees.create') ? 'active' : '' }}" href="{{ route('employees.create') }}">Добавить сотрудника</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Конфигурации 1С</a>
            </li>
        </ul>

        <span class="navbar-text">
            App\Приём заявок(<strong>alpha-0.0.2</strong>)
        </span>

        </div>
        
    </div>

</nav>

<p></p>