<x-layout>

    <div class="content container-fluid">
        <div class="contentWrapper">
            <div class="productView pt-5 pb-5">
                    <div class="inputView">
                        <div class="productImage w-50">
                            <img src="/img/heroImage.jpg" class="img-fluid" style="width:100%" alt="...">
                        </div>
                        <div class="detailProduct ms-5 ps-5">
                            <h2 class="fw-semibold">{{$details->name}}</h2>
                            <div class="ratingDetail">

                                @for ($i = 0; $i < $details->items->first()->rating; $i++)
                                <i class="fa-solid fa-star mb-3"></i>
                                @endfor
                            </div>
                            <p class="fw-medium">IDR {{number_format($details->items->first()->price, 2, ',', '.')}}</p>
                            <p class="text-secondary">SKU: {{$details->items->first()->SKU}}</p>
                            <p>Size: </p>
                            <div class="btn-group w-50" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-dark rounded-0" for="btnradio1">S</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-dark rounded-0" for="btnradio2">M</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-dark rounded-0" for="btnradio3">L</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                <label class="btn btn-outline-dark rounded-0" for="btnradio4">XL</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                <label class="btn btn-outline-dark rounded-0" for="btnradio5">XXL</label>
                            </div>
                            <div class="quantity mt-3">
                                <label for="quantity">Quaantity:</label>
                                <input type="number" class="form-control rounded-0 ms-2" value="1" min="1" max="10" step="1" style="border: 1px solid rgba(90, 90, 90, .5); background:#f4f4f6; width:80px">
                            </div>
                            <div class="subtotal mt-5">
                                <P>Subtotal:</P>
                                <p class="ms-1 fw-medium">IDR 100.000</p>
                            </div>
                            <div class="cartSubmit">
                                <a href="#" class="addCartDetail card-link btn btn-dark rounded-0 w-75 fw-medium text-center" style="background-color: #1c1c1c">Add to Cart</a>
                                <button id="buttonFav"  class="favButton btn  border-dark rounded-0 ms-2">
                                    <i class="fa-regular fa-heart" id="favIcon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="imageClick mt-3">
                        <img src="/img/heroImage.jpg" alt="" style="width:200px">
                        <img src="/img/heroImage.jpg" alt="" style="width:200px">
                        <img src="/img/heroImage.jpg" alt="" style="width:200px">
                    </div>
                    <div class="productDescription mt-5 pt-3">
                        <h5>Details</h5>
                        <hr class="border border-dark border-2 opacity-100" style="width:100px">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti consequuntur architecto voluptas eius deserunt soluta pariatur fugit adipisci accusantium? Rerum vitae nam assumenda ipsum maiores laborum itaque asperiores quos explicabo.
                            A soluta expedita voluptatibus ducimus minima id sunt, unde facilis inventore. Labore, commodi, repellendus nisi, aperiam natus veritatis suscipit a sint corporis laboriosam ut maiores fugit quae? Repudiandae, officia veniam?
                            Quisquam nam sequi vel, pariatur qui tempora cum, veritatis reprehenderit animi quo doloremque accusamus veniam distinctio necessitatibus temporibus impedit nemo non, iste aliquid! Perferendis voluptas ullam assumenda dicta eos. Tempore.</p>
                    </div>

                    <hr>



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
                                                                <i class="fa-solid fa-star"></i>
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
