<nav class="navbar navbar-expand-lg bg-transparent sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('dashboard') }}">Wedding</a>
        <div class="collapse navbar-collapse visible" id="navbarNav">
        <ul class="navbar-nav flex w-full justify-between">
            <div class="d-lg-flex">
                <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  {{ Route::is('reservation') ? 'active' : '' }}" href="{{ route('reservation') }}">Reservation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  {{ Route::is('give') ? 'active' : '' }}" href="{{ route('give') }}">Send a gift</a>
                </li>
            </div>

            <form action="{{ route('logout') }}" method="POST" class="nav-item bg-danger rounded-md px-2.5">
                @csrf
                @method('POST')
                <button type="submit" class="nav-link text-white">Logout</button>
            </form>
        </ul>
        </div>
    </div>
</nav>