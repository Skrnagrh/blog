<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <h3>
      <a class="navbar-brand" href="/">BLOG</a>
    </h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
                @else
            <li class="nav-item">
              <a class="nav-link {{($active === "login") ? 'active' : '' }}" href="/login">
                <i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
          </ul>

    </div>
  </div>
</nav>