<x-layout>
    @foreach ($products as $data)
        <x-addToCart :id="$data->id"/>
    @endforeach

    <div class="product container-fluid">
        <div class="card-group row row-cols-1 row-cols-md-4 d-flex justify-content-start g-4 gap-0 m-0 p-5">
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
                                        {{ number_format($item->rating, 1, ',', '.') }}
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush border-0 ms-4">
                                    <li class="list-group-item fw-bold border-0">IDR {{ number_format($item->price, 2, ',', '.') }}</li>
                                    <li class="list-group-item border-0">Size: {{ $item->size }}</li>
                                    <li class="list-group-item border-0">Stock: {{ $item->qty_in_stock }}</li>
                                </ul>
                                <br>
                                <div class="bottomCard list-group list-group-flush">
                                    <div class="card-body d-flex justify-content-evenly align-items-center border w-100">
                                        <a href="/detail_product/{{$data->id}}" class="p-0 ms-4 me-auto viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark">View More</a>
                                        <a href="#" class="addCart card-link btn btn-dark rounded-0 fw-medium me-4"
                                           data-bs-toggle="modal"
                                           data-bs-target="#addProductModal"
                                           data-id="{{ $data->id }}"
                                           data-name="{{ $data->name }}"
                                           data-price="{{ $item->price }}"
                                           data-stock="{{ $item->qty_in_stock }}"
                                           data-rating="{{ $item->rating }}"
                                           data-image="img/heroImage.jpg">
                                           Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>


</x-layout>
