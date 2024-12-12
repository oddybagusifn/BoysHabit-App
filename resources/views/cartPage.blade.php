<x-layout>
    <div class="mainCart ms-5 me-5 ps-5 pe-5">
        <div class="mainCartWrapper pt-5 pb-5">
{{--
            @session('deleted')
                @if (@session)

                @endif
            @endsession --}}

            <h1 class="fw-bold">Shopping Cart</h1>
            <hr class="border border-dark border-1 opacity-25">
            @if ($carts->isEmpty() || $carts->every(fn($cart) => $cart->cartItems->isEmpty()))
                <p class="pt-3 mt-5">Your Cart is Empty</p>
                <a href="/" class="btn btn-dark fw-semibold fs-5 rounded-0">
                    CONTINUE SHOPPING
                </a>
            @else
                <div class="col">
                    @foreach ($carts as $cart)
                        @if ($cart->cartItems->isNotEmpty())
                            <div class="row-12">
                                <div class="mainCartBox mt-5">
                                    <div class="cartItem w-75">
                                        @foreach ($cart->cartItems as $item)
                                        <div class="productList mb-4"> <!-- Tambahkan margin bawah untuk spasi -->
                                            <div class="card" id="productListCard">
                                                <div class="productListCard card-body ms-0">
                                                    <div class="imgCartList w-50">
                                                        <img src="/img/heroImage.jpg" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="productDescription w-100 ms-5">
                                                        <div class="headerCard">
                                                            <h5 class="card-title fw-semibold fs-2 w-100">{{$item->products->name}}</h5>
                                                            <form action="{{ route('cart-items.destroy', $item->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn float-end me-2">
                                                                    <i class="fa-solid fa-x"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <p class="">Size: {{$item->sizes->size_name}}</p>
                                                        <p class="">Price: Rp.{{number_format($item->products->items->first()->price, 2, ',', '.')}}</p>
                                                        <div class="quantitySub">
                                                            <p class="fw-bold">Quantity: {{$item->quantity}}</p>
                                                            <div class="subtotal ms-auto">
                                                                <p class="fw-bold pt-3">SUBTOTAL: IDR {{number_format($item->subtotal, 2, ',', '.')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="orderSection w-25 ms-4">
                                        <div class="orderDetails card border mx-auto w-100">
                                            <form action="/checkout" method="post">
                                                @csrf
                                                <div class="orderDetailsWrapper pt-3 ms-3 me-3">
                                                    <input type="hidden" name="user_id" id="user_id" value="{{$userId}}">
                                                    <h1 class="fw-semibold fs-4">Order Summary | {{$totalItems}} Item</h1>
                                                    <hr class="border border-dark border-1 opacity-25">
                                                    <div class="orderSummaryContent">
                                                        <div class="subtotalDetail ms-0">
                                                            <p class="">Item Subtotal</p>
                                                            <p class="ms-auto">IDR {{number_format($subtotalItems, 2, ',', '.')}}</p>
                                                        </div>
                                                        <div class="subtotalPPN">
                                                            <div class="subtotalDetail ms-0 p-0 m-0">
                                                                <p class="fw-bold p-0 m-0">SUBTOTAL</p>
                                                                <p class="ms-auto p-0 m-0">IDR {{number_format($subtotalItems, 2, ',', '.')}}</p>
                                                            </div>
                                                            <div class="ppn pt-0 text-secondary">
                                                                <p class="">VAT Include</p>
                                                                <p class="ms-auto p-0 m-0">IDR {{number_format($totalPPN, 2, ',', '.')}}</p>
                                                            </div>
                                                        </div>
                                                        <hr class="border border-dark border-1 opacity-25 mt-5">
                                                        <div class="orderTotal ms-0 mb-0 pb-0">
                                                            <p class="fw-bold fs-5">ORDER TOTAL</p>
                                                            <input type="hidden" name="total_order" id="total_order" value="{{$totalOrder}}">
                                                            <p class="ms-auto fw-bold">IDR {{number_format($totalOrder, 2, ',', '.')}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="paymentButton mx-auto w-100 mt-4">

                                                    <input type="submit" class="addCartDetail card-link btn btn-dark rounded-0 p-2 w-100 fw-medium text-center" name="simpan" style="background-color: #1c1c1c" value="Proceed to Payment">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div class="cartRecomendedProduct mb-5 pb-5 mt-5">
            <h1 class="text-center fw-semibold">PEOPLE ALSO BOUGHT</h1>
            <div class="card-group row row-cols-1 row-cols-md-4 g-4 gap-0 m-0 p-0">
                @foreach ($products as $data)
                    @foreach ($data->items as $item)
                        <div class="col">
                            <a class="aCard" href="/detail_product/{{$data->id}}">
                                <div class="card rounded-0 me-0 w-100">
                                    <img src="img/heroImage.jpg" class="card-img-top rounded-0" alt="...">
                                    <div class="card-body ms-4">
                                        <h5 class="card-title fw-semibold">{{ $data->name }}</h5>
                                        <div class="rating">
                                            <i class="fa-solid fa-star" style="color:#FFD438"></i>
                                            {{ number_format($item['rating'], 1, ',', '.') }}
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush border-0 ms-4">
                                        <li class="list-group-item fw-bold border-0">IDR {{ number_format($item->price, 2, ',', '.') }}</li>
                                        <li class="list-group-item border-0">Size: {{$item->size}}</li>
                                        <li class="list-group-item border-0">Stock: {{ $item->qty_in_stock }}</li>
                                    </ul>
                                    <br>
                                    <div class="bottomCard list-group list-group-flush">
                                        <div class="card-body ms-auto me-4">
                                            <a href="/detail_product/{{$data->id}}" class="viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark me-3">View More</a>
                                            <a href="#" class="addCart card-link btn btn-dark rounded-0 fw-medium">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
