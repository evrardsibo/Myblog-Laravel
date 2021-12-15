<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home')}}">
        <i class="fas fa-home"></i>
          Accueil
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('articles') }}">
              <i class="far fa-newspaper"></i>
              Link
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>