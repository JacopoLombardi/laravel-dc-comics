
@extends('layout.main')

@section('content')

    <h1 class="text-center my-5">Fumetti</h1>

    <div class="container d-flex justify-content-center flex-wrap my-5">

        @foreach ($products as $item)
            <div class="col-3 card bg-light m-3">
                <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->title }}</h4>
                    <p class="fw-semibold">{{ $item->price }}</p>
                    <p>{{ $item->series }}</p>
                    <p>{{ $item->sale_date }}</p>
                    <p>{{ $item->type }}</p>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
        @endforeach

    </div>

@endsection
