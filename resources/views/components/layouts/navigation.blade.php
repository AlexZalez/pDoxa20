<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">pDoxa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('principal') ? 'active fw-bold text-info border-bottom border-info' :''}}" aria-current="page" href="{{route("principal")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('post.*') || request()->routeIs('post') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("post")}}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('contactos') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("contactos")}}">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('nosotros') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("nosotros")}}">Nosotros</a>
          </li>
        </ul>
        <div class="d-flex">
            <li class="nav-item d-flex justify-content-end me-3">
              @guest
                <a class="nav-link me-1 {{request()->routeIs('register') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("register")}}">Registro</a>
                <a class="nav-link me-1 {{request()->routeIs('login') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("login")}}">Login</a>
              @else
                <form action="{{route('logout')}}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-outline-info">Logout</button>
                </form>
              @endguest
            </li>
        </div>
      </div>
    </div>
  </nav>