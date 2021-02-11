<ul class="nav flex-column">
  <li class="nav-item">
    <a class="btn btn-md btn-primary mb-2" style="background-color:black; border-color:black" aria-current="page" href="{{ route('encargado.index') }}">Solicitudes</a>
  </li>
  <li class="nav-item">
  <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="background-color:black; border-color:black">
                                {{ __('Cerrar sesion') }}
                            </x-dropdown-link>
                        </form>
  </li>
</ul>