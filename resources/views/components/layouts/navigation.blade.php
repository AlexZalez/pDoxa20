<nav class="flex justify-between bg-slate-200 p-3">
  <div class="font-extrabold text-sky-500 font-mono text-2xl">
    pDoxa
  </div>

  <div class="flex flex-row gap-3">
    <div>
      <a class="{{request()->routeIs('principal') ? 'active fw-bold text-info border-bottom border-info' :''}}" aria-current="page" href="{{route("principal")}}">Home</a>
    </div>
    <div>
      <a class="{{request()->routeIs('post.*') || request()->routeIs('post') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("post")}}">Post</a>
    </div>
    <div>
      <a class="{{request()->routeIs('contactos') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("contactos")}}">Contacto</a>
    </div>
    <div>
      <a class="{{request()->routeIs('nosotros') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("nosotros")}}">Nosotros</a>
    </div>
  </div>

  <div class="">
    <div class="d-flex">
      
      @guest
        <a class="nav-link me-1 {{request()->routeIs('register') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("register")}}">Registro</a>
        <a class="nav-link me-1 {{request()->routeIs('login') ? 'active fw-bold text-info border-bottom border-info' :''}}" href="{{route("login")}}">Login</a>
      @else
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-info">Logout</button>
        </form>
      @endguest
      
  </div>
  </div>
</nav>
    
              
        
        
      
    
  