<nav class="navbar navbar-dark navbar-expand-lg sticky-top p-3">
    <div class="container-fluid ms-5 me-5 ps-5 pe-5">
    <div class="logo">
        <a class="navbar-brand fw-bolder" href="/">
            <img class="imageLogo" src="/img/logo.png" alt="">
            boyshabit.
        </a>
    </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item  pe-4">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }} fw-semibold" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('product') ? 'active' : '' }} fw-semibold" href="/product">Products</a>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('best_seller') ? 'active' : '' }} fw-semibold" href="#">Best Seller</a>
          </li>
          <li class="nav-item dropdown pe-4">
            <a class="nav-link dropdown-toggle fw-semibold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }} fw-semibold" href="#">About</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item pe-4">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-magnifying-glass" style="color:white"></i>
                </a>
            </li>

            <li class="nav-item pe-4">
                <a class="nav-link btn" href="#" id="cartButton">
                    <i class="fa-solid fa-cart-shopping"  style="color:white"></i>
                </a>
            </li>

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @else

            <li class="nav-item pe-4">
                <a class="nav-link" href="/login">
                    <i class="fa-solid fa-user"  style="color:white"></i>
                </a>
            </li>

            @endauth

        </ul>

      </div>
    </div>
  </nav>
