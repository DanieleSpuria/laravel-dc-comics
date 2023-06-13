<nav class="navbar">
  <ul class="nav nav-tabs w-100">
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{ route('comics.index') }}">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{ route('comics.create') }}">Add</a>
    </li>
  </ul>
</nav>

