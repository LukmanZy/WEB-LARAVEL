{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="#">INI WEB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
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
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ $active === "Login" ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
