<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('booking')}}">Booking service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключить навигацию">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('booking.services')}}"><strong>Сервисы</strong></a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link disabled" href="https://getbootstrap.su/docs/5.0/examples/carousel/#"--}}
{{--                           tabindex="-1" aria-disabled="true">Отключенная</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>
</header>
