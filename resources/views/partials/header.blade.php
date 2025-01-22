<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span style="color: #5e9693;">Beer</span><span style="color: #fff;">Lab</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    @auth              
                                              
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#!">Contatti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('deleted.index') }}">Cestino</a>
                        </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav d-flex flex-row ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Color of the links BEFORE scroll */
    .navbar-scroll .nav-link,
    .navbar-scroll .navbar-toggler-icon,
    .navbar-scroll .navbar-brand {
        color: #fff;
    }

    /* Color of the links AFTER scroll */
    .navbar-scrolled .nav-link,
    .navbar-scrolled .navbar-toggler-icon,
    .navbar-scrolled .navbar-brand {
        color: #fff;
    }

    /* Color of the navbar AFTER scroll */
    .navbar-scroll,
    .navbar-scrolled {
        background-color: #cbbcb1;
    }

        /* Classe iniziale con effetto trasparente */
    .mask-custom {
    backdrop-filter: blur(1px);
    background-color: rgba(0, 0, 0, 0.15);
    transition: background-color 0.3s ease-in-out;
    }

    /* Classe per lo stato solido */
    .navbar-scrolled {
    backdrop-filter: none;
    background-color: orange;
    }


    .navbar-brand {
        font-size: 1.75rem;
        letter-spacing: 3px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
      const navbar = document.querySelector('.navbar');
  
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          navbar.classList.add('navbar-scrolled');
        } else {
          navbar.classList.remove('navbar-scrolled');
        }
      });
    });
  </script>
  