@extends('layouts.main')

@section('content')
    <!-- Три столбца текста под каруселью -->
    <div class="row">
        <div class="row">
            @foreach($masters as $index => $master)
                <div class="col-lg-4 text-center mb-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <text x="50%" y="50%" fill="#fff" dy=".3em">140x140</text>
                    </svg>

                    <h2>Имя: {{ $master->name }}></h2>
                    <p><strong>Должность: {{ $master->position }}</strong></p>
                    <p><strong>О себе: {{ $master->bio }}</strong></p>
                    <p><a class="btn btn-success"
                          href="{{route('booking.services.select', ['masterId' => $master->id])}}">Выбрать мастера</a>
                    </p>
                    <p><a class="btn btn-secondary" href="#">Посмотреть профиль »</a></p>
                </div>

                @if(($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $masters->links() }}
        </div>
@endsection
