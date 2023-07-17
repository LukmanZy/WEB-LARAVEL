{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="/">INI WEB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @auth
            <li class="nav-item">
                <a class="nav-link {{ ($active === "Home" ) ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "About") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === "Post" ? 'active' : '' }}" href="/posts">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === "Categories" ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            @endauth

        </ul>

            <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" id="navbarDropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="/dashboard" class="dropdown-item"><i class="bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === "Login" ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
            @endauth
                </ul>
        </div>
    </div>
  </nav>
