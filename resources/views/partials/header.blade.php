<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">Comics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            {{-- Gestione Active --}}
            <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            {{-- Route comics.index --}}
            {{-- Gestione Active --}}
            <li class="nav-item {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('comics.index') }}">Comics <span class="sr-only">(current)</span></a>
            </li>

            {{-- NUOVO NUOVO NUVO --}}
            {{-- Gestione Active --}}
            <li class="nav-item {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('comics.create') }}">New Comic <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
</header>