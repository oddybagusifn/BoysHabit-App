<nav class="navbar navbar-light bg-light navbar-expand-lg sticky-top p-3">
    <div class="container-fluid ms-5 me-5 ps-5 pe-5">
    <div class="logo">
        <a class="navbar-brand fw-bolder d-flex align-items-center justify-content-between" href="/">
            <img class="imageLogo bg-dark me-2" src="/img/logo.png" alt="">
            boyshabit.
        </a>
    </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item  pe-4">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }} fw-medium" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('product') ? 'active' : '' }} fw-medium" href="/product">Products</a>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('best_seller') ? 'active' : '' }} fw-medium" href="#">Best Seller</a>
          </li>
          <li class="nav-item dropdown pe-4">
            <a class="nav-link dropdown-toggle fw-medium" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li>
                        @if ($category->id < 3 )
                            <a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category_name }}</a>
                        @endif
                @endforeach
                <li><hr class="dropdown-divider"></li>
                @foreach ( $categories as $category )
                    @if ($category->id >= 3)
                            <a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category_name }}</a>
                            @endif
                        </li>
                @endforeach


            </ul>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }} fw-medium" href="#">About</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">
            <li class="nav-item pe-4">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-magnifying-glass" style="color: #1c1c1c"></i>
                </a>
            </li>

            <li class="nav-item pe-4">
                <a class="nav-link btn" href="#" id="cartButton">
                    <i class="fa-solid fa-cart-shopping"  style="color: #1c1c1c"></i>
                </a>
            </li>

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="fw-semibold text-light p-2 d-flex justify-content-center align-items-center rounded-circle bg-dark" style="width: 30px; height:30px; max-width: 200px; aspect-ratio: 1 / 1;">
                        {{ Str::ucfirst(Str::substr(auth()->user()->name, 0, 1)) }}
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" style="position: absolute; right: 0;" aria-labelledby="dropdownMenuButton">
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
