
@extends('layout.main')


@section('content')

    <div class="container my-5">
        <h1 class="text-center">Form per Inserire un Fumetto</h1>

        <form class="col-6 mt-5" action="{{ route('books.store') }}" method="POST">
            @csrf
            <div>
                <label class="fw-semibold" for="">Titolo</label>
                <input class="form-control" type="text" placeholder="inserire titolo" name="title">
            </div>
            <div class="my-3">
                <label class="fw-semibold" for="">Prezzo</label>
                <input class="form-control" type="text" placeholder="inserire prezzo" name="price">
            </div>
            <div>
                <label class="fw-semibold" for="">Serie</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="series">
            </div>

            <button class="btn btn-primary fw-semibold mt-5">Inserisci Fumetto</button>
        </form>
    </div>


@endsection
