<div class="admin">
<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{ asset('/public/images/logo.png') }}" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</header>
</div>