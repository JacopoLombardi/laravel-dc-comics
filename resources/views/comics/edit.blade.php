
@extends('layout.main')


@section('content')

    <div class="container my-5">
        <h2 class="text-center text-secondary mb-3">Form per Modificare il Fumetto</h2>
        <h1 class="text-center">"{{ $comic->title }}"</h1>

        <form class="col-6 mt-5" action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label class="fw-semibold">Titolo</label>
                <input class="form-control" type="text" placeholder="inserire titolo" name="title" value="{{ $comic->title }}">
            </div>
            <div class="my-4">
                <label class="fw-semibold">Prezzo</label>
                <input class="form-control" type="text" placeholder="inserire prezzo" name="price" value="{{ $comic->price }}">
            </div>
            <div>
                <label class="fw-semibold">Serie</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="series" value="{{ $comic->series }}">
            </div>
            <div class="my-4">
                <label class="fw-semibold">URL Immagine</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="image" value="{{ $comic->image }}">
            </div>
            <div>
                <label class="fw-semibold">Data di Uscita</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="my-4">
                <label class="fw-semibold">Tipo di Fumetto</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="type" value="{{ $comic->type }}">
            </div>
            <div>
                <label class="fw-semibold">Descrizione</label>
                <textarea class="form-control" name="description" cols="30" rows="5">{{ $comic->description }}"</textarea>
            </div>

            <button class="btn btn-warning fw-semibold mt-5">Conferma le Modifiche</button>
        </form>
    </div>

@endsection
