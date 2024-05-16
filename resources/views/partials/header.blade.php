
<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom py-4">
        <div class="container navbar-nav fw-semibold fs-4">

            <div class="d-flex">
                <a class="nav-link active" href="{{ route('homePage') }}">Home</a>
                <a class="nav-link active mx-5" href="{{ route('books.index') }}">Fumetti</a>
            </div>

            <div class="">
                <a class="nav-link active text-white bg-primary rounded-4 py-2 px-4 mt-2 fs-5" href="{{ route('books.create') }}">Aggiungi Fumetto</a>
            </div>

        </div>
    </nav>

</header>
