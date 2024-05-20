
@extends('layout.main')


@section('content')

    <div class="container my-5">
        <h1 class="text-center">Inserire un Fumetto</h1>


        <form class="col-6 mt-5" action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div>
                <label class="fw-semibold">Titolo</label>
                <input
                  class="form-control @error('title') is-invalid @enderror"
                  type="text"
                  placeholder="inserire titolo"
                  name="title"
                  value="{{ old('title') }}"
                >

                @error('title')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>




            <div class="my-4">
                <label class="fw-semibold">Prezzo</label>
                <input
                  class="form-control @error('price') is-invalid @enderror"
                  type="text"
                  placeholder="inserire prezzo"
                  name="price"
                  value="{{ old('price') }}"
                >

                @error('price')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>



            <div>
                <label class="fw-semibold">Serie</label>
                <input
                  class="form-control @error('series') is-invalid @enderror"
                  type="text"
                  placeholder="inserire serie"
                  name="series"
                  value="{{ old('series') }}"
                >

                @error('series')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>



            <div class="my-4">
                <label class="fw-semibold">URL Immagine</label>
                <input
                  class="form-control @error('image') is-invalid @enderror"
                  type="text"
                  placeholder="inserire serie"
                  name="image"
                  value="{{ old('image') }}"
                >

                @error('image')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>



            <div>
                <label class="fw-semibold">Data di Uscita</label>
                <input
                  class="form-control @error('sale_date') is-invalid @enderror"
                  type="text"
                  placeholder="inserire serie"
                  name="sale_date"
                  value="{{ old('sale_date') }}"
                >

                @error('sale_date')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>



            <div class="my-4">
                <label class="fw-semibold">Tipo di Fumetto</label>
                <input
                  class="form-control @error('type') is-invalid @enderror"
                  type="text"
                  placeholder="inserire serie"
                  name="type"
                  value="{{ old('type') }}"
                >

                @error('type')
                    <h6 class="text-danger ms-3 mt-1">{{ $message }}</h6>
                @enderror
            </div>



            <div>
                <label class="fw-semibold">Descrizione</label>
                <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
            </div>



            <button class="btn btn-primary fw-semibold mt-5">Inserisci Fumetto</button>
        </form>
    </div>

@endsection
