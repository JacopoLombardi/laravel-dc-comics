
@extends('layout.main')


@section('content')

    <div class="mb-5">
        <div class="text-center text-secondary my-5">
            <h1 class="text-center">Dettagli Prodotto</h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="container d-flex justify-content-end me-5">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>

            <div class="container d-flex flex-column justify-content-center">
                <h3 class="fs-2">{{ $comic->title }}</h3>
                <p class="fw-semibold fs-5 mt-5">{{ $comic->price }}</p>
                <p class="fw-semibold fs-5">{{ $comic->series }}</p>
                <p class="fw-semibold fs-5">{{ $comic->sale_date }}</p>
                <p class="fw-semibold fs-5">{{ $comic->type }}</p>

                <div class="mt-5">
                    <a class="btn btn-danger" href="{{ route('comics.index') }}">Torna Indietro</a>
                </div>
            </div>
        </div>

    </div>

@endsection







<style>

img{
    width: 300px;
    border-radius: 25px;
}

</style>
