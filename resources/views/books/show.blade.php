
@extends('layout.main')


@section('content')

    <div class="mb-5">
        <div class="text-center text-secondary my-5">
            <h1 class="text-center">Dettagli Prodotto</h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="container d-flex justify-content-end me-5">
                <img src="{{ $book->image }}" alt="{{ $book->title }}">
            </div>

            <div class="container d-flex flex-column justify-content-center">
                <h3 class="fs-2">{{ $book->title }}</h3>
                <p class="fw-semibold fs-5 mt-5">{{ $book->price }}</p>
                <p class="fw-semibold fs-5">{{ $book->series }}</p>
                <p class="fw-semibold fs-5">{{ $book->sale_date }}</p>
                <p class="fw-semibold fs-5">{{ $book->type }}</p>

                <div class="mt-5">
                    <a class="btn btn-danger" href="{{ route('books.index') }}">Torna Indietro</a>
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
