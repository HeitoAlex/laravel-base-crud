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
                        <a class="nav-link {{ Route::currentRouteName() === 'pages.animals.index' ? 'active' : ''}}" aria-current="page" href="{{ route('pages.animals.index')}}">Animals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'pages.animals.create' ? 'active' : ''}}" href="{{ route('pages.animals.create')}}">Create new animal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
