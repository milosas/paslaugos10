<nav class="navbar navbar-dark bg-dark ">
  <a href="#"> <img  src="http://shadowfax.org/wp-content/uploads/2017/05/york-pa-human-services.jpg" alt="Home"></a>
<ul class="nav ml-auto">
    <ul class="nav">
    @guest
  <li class="nav-item">
<a class="nav-link" href="{{ route('welcome') }}">Prisijungti</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registruotis</a><li>
      <li class="nav-item"><a href="{{route('categories.index')}}"class="nav-link">Kategorijos</a></li>
@endguest

@auth
  @if((Auth()->user() && Auth()->user()->role === 'admin'))
    <li class="nav-item"><a href="{{route('admin')}}"class="nav-link">Admin panelė</a></li>
  @endif
<li class="nav-item"><a href="{{route('categories.index')}}"class="nav-link">Kategorijos</a></li>
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }}
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Atsijungti') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endauth
</ul>
</nav>
