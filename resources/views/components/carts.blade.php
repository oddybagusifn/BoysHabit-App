<div class="overlay" id="overlay"></div>
    @if ($cartItems->isEmpty())
    <div class="cartView fixed-element  w-50" id="cartView">
        <div class="cartHead border-bottom border-opacity-50 border-dark">
            <h1 class="fw-semibold fs-4 ms-4 me-4 mb-0 mt-0">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </h1>
            <button class="border-none btn ms-auto me-4" id="closeCart">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    <div class="cartBody">
        <h5 class="fw-light text-secondary">Your cart is empty</h5>
        <a href="/cart_page" style="color: #1c1c1c; text-decoration:none">View All</a>
    </div>
    @else

    <div class="cartView fixed-element  w-50" id="cartView">
        <div class="cartHead mb-4 border-bottom border-opacity-50 border-dark">
            <h1 class="fw-semibold fs-4 ms-4 me-4 mb-0 mt-0">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </h1>
            <button class="border-none btn ms-auto me-4" id="closeCart">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    <div class="cartBody">
        @foreach ($cartItems as $item)
        <div class="card mb-1 ms-1 me-1" id="cartCard">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img src="/img/heroImage.jpg" class="img-fluid rounded-start border-end pe-3" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->products->name }}</h5>
                  <p class="fw-semibold m-0">Price: IDR {{ number_format($item->products->items->first()->price, 2, ',', '.') }}</p>
                  <p class="text-secondary m-0">Size: {{ $item->sizes->size_name }}</p>
                  <p class="text-secondary m-0">Quantity: {{ $item->quantity }}</p>
                  <p class="text-secondary m-0 fw-semibold text-dark mt-3">Subtotal: IDR {{ number_format($item->subtotal, 2, ',', '.') }}</p>
                </div>

              </div>
            </div>
          </div>
        @endforeach
    </div>

    <div class="card-footer border p-3 d-flex justify-content-center">
        <a href="/cart_page" class="text-secondary">View All</a>
    </div>

    @endif
</div>


