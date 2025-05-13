@extends('layouts.main')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @foreach($services as $service)
            <div class="col mb-4">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{$service->name}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Цена: {{$service->price}} грн</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><strong>Длительность: {{$service->duration}} мин.</strong></li>
                        </ul>
                        <a class="w-100 btn btn-lg btn btn-success"
                           href="#"
                        >Детальнее об услуге</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

