@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Оформление заказа</h2>
        <p><strong>Мастер:</strong> {{ $master->name }} ({{ $master->position }})</p>
        <p><strong>Услуга:</strong> {{ $service->name }}</p>
        <p><strong>Цена: </strong>{{ $price }} грн</p>
        <p><strong>Длительность: </strong>{{ $duration }} минут</p>

        <form action="{{ route('booking.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="master_id" value="{{ $master->id }}">
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Дата</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Время</label>
                <select name="time" id="timeSelect" class="form-control" required>
                    @for ($hour = 9; $hour <= 17; $hour++)
                        <option value="{{ sprintf('%02d:00', $hour) }}">{{ sprintf('%02d:00', $hour) }}</option>
                        <option value="{{ sprintf('%02d:30', $hour) }}">{{ sprintf('%02d:30', $hour) }}</option>
                    @endfor
                    <option value="18:00">18:00</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Оформить</button>
        </form>
    </div>
@endsection

