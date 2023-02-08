<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Amazing E-Grocery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto gap-1 my-3">
        @auth
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link btn btn-warning text-dark ">Logout</button>
                </form>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link btn btn-warning text-dark" href="/register">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-warning text-dark" href="/login">Login</a>
              </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>
  @auth
  <nav class="navbar navbar-expand-lg navbar bg-warning">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/carts/{{ auth()->user()->id }}">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile/{{ auth()->user()->id }}">Profile</a>
          </li>
          @if (auth()->user()->role->role_name === "Admin")
          <li class="nav-item">
            <a class="nav-link" href="/manage">Account Maintenance</a>
          </li>
          @endif
      </div>
    </div>
  </nav>
  @endauth

