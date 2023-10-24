<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="/images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Beranda </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('categories') }}">Kategori</a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
              </li>
              <li class="nav-item">
                <a
                  class="btn btn-success nav-link px-4 text-white"
                  href="{{ route('login') }}"
                  >Masuk</a
                >
              </li>    
            @endguest 
          </ul>
          @auth
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('dashboard-Settings-account') }}"
                  >Pengaturan</a
                >
                <div class="dropdown-divider"></div>
                <a 
                class="dropdown-item" 
                href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                >Keluar</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block mt-2" href="#">
                <img src="/images/cart.svg" alt="" />
              </a>
            </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="#"> Hi, Tupai </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block" href="#"> Keranjang </a>
            </li>
          </ul>
          @endauth
        </div>
      </div>
    </nav>