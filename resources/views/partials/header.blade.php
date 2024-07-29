<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Know the animals</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'animals.index' ? 'active' : ''}}" aria-current="page" href="{{ route('animals.index')}}">Animals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'animals.create' ? 'active' : ''}}" href="{{ route('animals.create')}}">Create new animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'animals.deleted' ? 'active' : ''}}" href="{{ route('animals.deleted')}}">Deleted animals</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
