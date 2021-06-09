<!-- awal navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item {{ head(explode('/', request()->path())) === 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">HOME</a>
                </li>
                <li class="nav-item {{ head(explode('/', request()->path())) === 'journal' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('journal.index') }}">JOURNAL</a>
                </li>
                <li class="nav-item {{ head(explode('/', request()->path())) === 'conference' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('conference.index') }}">CONFERENCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HELP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginAdmin')}}">ADMIN</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </div>
</nav>
<!-- akhir navbar -->
