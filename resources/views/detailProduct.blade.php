<x-layout>

    <div class="content container-fluid">
        <div class="contentWrapper pt-3 mt-3">
            <div class="productView pt-5 pb-5">
                    <div class="inputView mb-5">
                        <div class="imageGroup">
                            <div class="productImage w-100">
                                <img src="/img/heroImage.jpg" class="img-fluid" style="width:100%" alt="...">
                            </div>
                            <div class="imageClick mt-3">
                                <img src="/img/heroImage.jpg" alt="" style="width:200px">
                                <img src="/img/heroImage.jpg" alt="" style="width:200px">
                                <img src="/img/heroImage.jpg" alt="" style="width:200px">
                            </div>
                        </div>
                        <div class="detailProduct ms-5 ps-5">
                            <form action="/store-product/{{$details->id}}" method="POST">
                                @csrf
                                @foreach ($carts as $cart)
                                <input type="hidden" name="cart_id" id="cartId" value="{{$cart->id}}">
                                @endforeach
                                <input type="hidden" name="product_id" id="productId" value="{{$details->id}}">
                                <h2 class="fw-semibold">{{$details->name}}</h2>
                                <div class="ratingDetail">
                                    @for ($i = 0; $i < $details->items->first()->rating; $i++)
                                    <i class="fa-solid fa-star mb-3" style="color:#FFD438"></i>
                                    @endfor
                                </div>
                                <p class="fw-medium">IDR {{number_format($details->items->first()->price, 2, ',', '.')}}</p>
                                <p class="text-secondary">SKU: {{$details->items->first()->SKU}}</p>
                                <p class="">Stock: {{$details->items->first()->qty_in_stock}}</p>
                                <p>Size: </p>
                                <div class="btn-group w-50" role="group" aria-label="Basic radio toggle button group">
                                    @foreach ($sizes as $size)
                                    <input type="radio" class="btn-check" value="{{$size->id}}" name="size_id" id="{{$size->size_name}}" autocomplete="off" @if ($size->id == 2)
                                    @checked(true)
                                    @endif>
                                    <label class="btn btn-outline-dark rounded-0" for="{{$size->size_name}}">{{$size->size_name}}</label>
                                    @endforeach
                                </div>
                                <div class="quantity mt-3">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantityInput" name="quantity" class="form-control rounded-0 ms-2" value="1" min="1" max="10" step="1" style="border: 1px solid rgba(90, 90, 90, .5); background:#f4f4f6; width:80px">
                                </div>
                                <div class="subtotal mt-5">
                                    <P>Subtotal:</P>
                                    <p class="ms-1 fw-medium" id="subtotalAmount">Rp {{number_format($items->price, 2, ',', '.')}}</p>
                                    <!-- Hidden input untuk subtotal -->
                                    <input type="hidden" name="subtotal" id="subtotalInput" value="{{ $details->items->first()->price }}">
                                </div>
                                <div class="cartSubmit">
                                    <input type="submit" class="addCartDetail card-link btn btn-dark rounded-0 w-75 fw-medium text-center" name="simpan" style="background-color: #1c1c1c" value="Add to Cart">
                                    <button id="buttonFav"  class="favButton btn border-dark rounded-0 ms-2">
                                        <i class="fa-regular fa-heart" id="favIcon"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="productDesc mt-5">
                                <h5>Details</h5>
                                <hr class="border border-dark border-2 opacity-100" style="width:100px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti consequuntur architecto voluptas eius deserunt soluta pariatur fugit adipisci accusantium? Rerum vitae nam assumenda ipsum maiores laborum itaque asperiores quos explicabo.
                                    A soluta expedita voluptatibus ducimus minima id sunt, unde facilis inventore. Labore, commodi, repellendus nisi, aperiam natus veritatis suscipit a sint corporis laboriosam ut maiores fugit quae? Repudiandae, officia veniam?
                                    Quisquam nam sequi vel, pariatur qui tempora cum, veritatis reprehenderit animi quo doloremque accusamus veniam distinctio necessitatibus temporibus impedit nemo non, iste aliquid! Perferendis voluptas ullam assumenda dicta eos. Tempore.</p>
                            </div>
                        </div>
                    </div>


                    <script>
                        document.getElementById('quantityInput').addEventListener('input', function() {
                            let quantity = parseInt(this.value);
                            let price = {{ $details->items->first()->price }};
                            let subtotal = quantity * price;

                            // Format subtotal ke bentuk mata uang
                            let formattedSubtotal = new Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            }).format(subtotal);

                            document.getElementById('subtotalAmount').innerText = formattedSubtotal;

                            // Simpan subtotal ke dalam hidden input
                            document.getElementById('subtotalInput').value = subtotal;
                        });
                    </script>





                    <div class="descReviewProduct mt-5 pt-5">
                        <div class="productComment">
                            <h5 class="text-secondary">Reviews</h5>
                        </div>

                            <div class="reviewInputField mt-3">
                                <form action="/store-review/{{$details->id}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$details->id}}">
                                    <input type="hidden" name="user_id" value="{{$reviews->first()->users->id}}">
                                    <div class="reviewUser w-100">
                                        <img class="rounded-circle img-fluid" src="/img/heroImage.jpg" style="width: 40px; height:40px" alt="">
                                        <input class="inputReview w-100 border-bottom border-secondary border-1 opacity-75 bg-transparent ms-3 p-2 fs-6" type="text" name="review" width="100%" placeholder="Add review">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn border-dark rounded-0 mt-2 ps-5 pe-5" name="simpan" style="background-color: #1c1c1c; color:#f4f4f6;">Review</button>
                                    </div>
                                </form>
                            </div>

                        @foreach ($reviews as $data)
                        @if ($data->product_id == $details->id)

                            <div class="reviewBox mt-5">
                                <div class="reviewSection container-fluid">
                                    <div class="reviewUser w-100">
                                        <img class="rounded-circle img-fluid" src="/img/heroImage.jpg" style="width: 40px; height:40px" alt="">
                                        <p class="p-0 m-0 ms-2 fw-medium">{{$data->users->name}}</p>
                                        <p class="p-0 m-0 ms-3 ms-auto">
                                            <i class="fa-solid fa-star" style="color:#FFD438"></i>
                                            {{number_format($data->rating, 1, '.', ',')}}
                                        </p>
                                        <p class="p-0 m-0 ms-3 fw-light text-secondary ml-auto">{{$data->updated_at->diffForHumans()}}</p>
                                    </div>
                                    <div class="reviewText mt-4 w-75">
                                        <p>{{$data->review}}</p>
                                    </div>
                                    <div class="likeDislike d-flex justify-content-end pt-0 mt-0">
                                        <p class="p -0 m-0 text-secondary">Was this review helpful?</p>
                                        <button class="btn pt-0 mt-0">
                                            <i class="fa-regular fa-thumbs-up fa-lg"></i>
                                        </button>
                                        <p class="m-0 p-0 text-secondary fw-light">0</p>
                                        <button class="btn pt-0 mt-0">
                                            <i class="fa-regular fa-thumbs-down fa-flip-horizontal fa-lg"></i>
                                        </button>
                                        <p class="m-0 p-0 text-secondary fw-light">0</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    <div class="recomendedProduct mt-5">
                        <h3 class="text-center mb-5">Recomended Product</h3>
                        <div class="card-group gap-4">
                                    @foreach ($products->take(4) as $data)
                                    @foreach ($data->items as $item)
                                        <div class="col">
                                            <a class="aCard" href="/detail_product/{{$data->id}}">
                                                <div class="card rounded-0 me-0 w-100">
                                                    <img src="/img/heroImage.jpg" class="card-img-top rounded-0" alt="...">
                                                    <div class="card-body ms-4">
                                                        <h5 class="card-title fw-semibold">{{ $data->name }}</h5>
                                                        <div class="rating">
                                                                <i class="fa-solid fa-star" style="color:#FFD438"></i>
                                                                {{number_format($item['rating'], 1, ',', '.')}}
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush border-0 ms-4">
                                                        <li class="list-group-item fw-bold border-0">IDR {{ number_format($item->price, 2, ',', '.') }}</li>
                                                        <li class="list-group-item border-0">Size: {{$details->items->first()->size}}</li>
                                                        <li class="list-group-item border-0">Stock: {{ $item->qty_in_stock }}</li>
                                                    </ul>
                                                    <br>
                                                    <div class="bottomCard list-group list-group-flush">
                                                        <div class="card-body ms-auto me-4">
                                                            <a href="/detail_product/{{$data->id}}" class="viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark  me-3">View More</a>
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
            </div>
    </div>
</x-layout>
