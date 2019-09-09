
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
        <p class="app-sidebar__user-name">
          @if(Auth::user()->anggota == null)
          {{Auth::user()->name}}
          @else
          {{Auth::user()->anggota->nama}}
          @endif
        </p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Beranda</span></a></li>
        <li><a class="app-menu__item" href="{{url('logout')}}"><i class="app-menu__icon fa fa-window-close"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>