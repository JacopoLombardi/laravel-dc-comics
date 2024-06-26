
@extends('layout.main')

@section('content')

    <h1 class="text-center my-5">Fumetti</h1>

    @if(session('message'))
        <div class="container d-flex justify-content-center alert alert-danger w-50">
            {{ session('message') }}
        </div>
    @endif

    <div class="container d-flex justify-content-center flex-wrap my-5">

        @foreach ($products as $item)
            <div class="col-3 card bg-light m-5">
                <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->title }}</h4>
                    <p class="fw-semibold">{{ $item->price }}</p>
                    <p>{{ $item->series }}</p>
                    <p>{{ $item->sale_date }}</p>
                    <p>{{ $item->type }}</p>
                </div>

                <div class="text-center d-flex justify-content-center pb-4">
                    <a class="btn btn-success" href="{{ route('comics.show', $item) }}"><i class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-warning mx-3" href="{{ route('comics.edit', $item) }}"><i class="fa-solid fa-pencil"></i></a>
                    <form action="{{ route('comics.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>

@endsection
