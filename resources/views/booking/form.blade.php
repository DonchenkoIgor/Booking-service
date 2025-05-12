@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Оформление заказа</h2>
        <p><strong>Мастер:</strong> {{ $master->name }} ({{ $master->position }})</p>
        <p><strong>Услуга:</strong> {{ $service->name }} ({{ $service->price }} грн, {{ $service->duration }} мин)</p>
        <p><strong>Цена: </strong>{{ $price }} грн</p>
        <p><strong>Длительность: </strong>{{ $duration }} минут</p>

        <form action="{{ route('booking.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="master_id" value="{{ $master->id }}">
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="mb-3">
                <label for="date" class="form-label">Дата</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Время</label>
                <input type="time" name="time" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Оформить</button>
        </form>
    </div>
@endsection

