<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <a
      class="navbar-brand p-0"
      href="{{ route('bs.dashboard') }}"
    >
      <x-application-logo
        class="d-inline-block"
        style="width: 40px;"
      />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse"
      id="navbarSupportedContent"
    >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <x-bs.nav-item
          :href="route('bs.dashboard')"
          :active="request()->routeIs('bs.dashboard')"
        >
          {{ __('Dashboard') }}
        </x-bs.nav-item>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <x-bs.dropdown class="dropdown-menu-end">
            <x-slot name="trigger">
              {{ Auth::user()->name }}
            </x-slot>

            <x-slot name="content">
              <x-bs.dropdown.header>
                {{ Auth::user()->email }}
              </x-bs.dropdown.header>
              <x-bs.dropdown.item :href="route('bs.profile.edit')">
                {{ __('Profile') }}
              </x-bs.dropdown.item>

              <!-- Authentication -->
              <form
                method="POST"
                action="{{ route('logout') }}"
              >
                @csrf
                <x-bs.dropdown.item
                  :href="route('logout')"
                  onclick="event.preventDefault(); this.closest('form').submit();"
                >
                  {{ __('Log Out') }}
                </x-bs.dropdown.item>
              </form>
            </x-slot>
          </x-bs.dropdown>
        </li>
      </ul>
    </div>
  </div>
</nav>
