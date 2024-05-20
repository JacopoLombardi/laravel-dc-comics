
@extends('layout.main')


@section('content')

    <div class="container my-5">
        <h1 class="text-center">Inserire un Fumetto</h1>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </div>

        @endif

        <form class="col-6 mt-5" action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div>
                <label class="fw-semibold">Titolo</label>
                <input class="form-control" type="text" placeholder="inserire titolo" name="title">
            </div>
            <div class="my-4">
                <label class="fw-semibold">Prezzo</label>
                <input class="form-control" type="text" placeholder="inserire prezzo" name="price">
            </div>
            <div>
                <label class="fw-semibold">Serie</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="series">
            </div>
            <div class="my-4">
                <label class="fw-semibold">URL Immagine</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="image">
            </div>
            <div>
                <label class="fw-semibold">Data di Uscita</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="sale_date">
            </div>
            <div class="my-4">
                <label class="fw-semibold">Tipo di Fumetto</label>
                <input class="form-control" type="text" placeholder="inserire serie" name="type">
            </div>
            <div>
                <label class="fw-semibold">Descrizione</label>
                <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
            </div>

            <button class="btn btn-primary fw-semibold mt-5">Inserisci Fumetto</button>
        </form>
    </div>

@endsection
