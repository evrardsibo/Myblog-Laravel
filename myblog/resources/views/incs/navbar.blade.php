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
              Articles
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          @if (Auth::user())
            
          @if (Auth::user()->role === 'admin')
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin')}}">
              <i class="fas fa-user-cog"></i>
              Administrator
            </a>
          </li>
          @endif
              
          <li class="nav-item">
            <form method="post" action="{{ route('logout')}}">
              @csrf
              <button type="submit" class="btn">Logout</button>
            </form>
          </li>
          @else
              
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login')}}">
              Login
            </a>
          </li>
          @endif
        
        </ul>
      </div>
    </div>
  </nav>