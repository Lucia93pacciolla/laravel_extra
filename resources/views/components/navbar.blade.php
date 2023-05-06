<nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::is('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is('chi-siamo')) active @endif" href="{{route('chi-siamo')}}">Chi siamo?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is('game.create')) active @endif" href="{{route('game.create')}}">Aggiungi un gioco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is('index')) active @endif" aria-current="page" href="{{route('index')}}">Lista giochi</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>