<div class="overlay" id="overlay"></div>
    @if ($cartItems->isEmpty())
    <div class="cartView fixed-element" id="cartView">
        <div class="cartHead bg-light border-bottom border-opacity-50 border-dark">
            <h1 class="fw-semibold fs-4 ms-4 me-4 mb-0 mt-0">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </h1>
            <button class="border-none btn ms-auto me-4" id="closeCart">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    <div class="cartBody d-flex h-100 w-100 d-flex justify-content-center align-items-center border">
        <h5 class="fw-light text-secondary">Your cart is empty</h5>
    </div>

    <div class="card-footer border bg-light p-3 d-flex justify-content-center">
        <a href="/cart_page" class="text-dark" style="text-decoration: none">View All Products (0)</a>
    </div>


    @else

    <div class="cartView fixed-element" style="" id="cartView">
        <div class="cartHead mb-1 border-bottom border-opacity-50 border-dark">
            <h1 class="fw-semibold fs-4 ms-4 me-4 mb-0 mt-0">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </h1>
            <button class="border-none btn ms-auto me-4" id="closeCart">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    <div class="cartBody overflow-auto h-100">
        @foreach ($cartItems as $item)
        <div class="card mb-1 ms-1 me-1" id="cartCard">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img src="/img/heroImage.jpg" class="img-fluid w-100 rounded-start border-end pe-3" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">{{ $item->products->name }}</h5>
                  <p class="m-0">Price: IDR {{ number_format($item->products->items->first()->price, 2, ',', '.') }}</p>
                  <p class="text-secondary m-0">Size: {{ $item->sizes->size_name }}</p>
                  <p class="text-secondary m-0">Quantity: {{ $item->quantity }}</p>
                  <div class="subtotalDelete d-flex flex-row justify-content-between align-items-center">
                    <p class="text-secondary m-0 fw-semibold text-dark">Subtotal: IDR {{ number_format($item->subtotal, 2, ',', '.') }}</p>
                    <form action="{{ route('cart-items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn float-end me-2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        @endforeach
    </div>

    <div class="cart-footer border-top border-opacity-50 border-dark sticky-bottom bg-light border p-3 d-flex justify-content-center">
        <a href="/cart_page" class="text-dark" style="text-decoration: none">View All Products ({{ $totalItems }})</a>
    </div>

    @endif
</div>


