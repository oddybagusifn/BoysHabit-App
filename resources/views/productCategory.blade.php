<x-layout>
        @if ($products->isEmpty())
        <div class="isEmpty d-flex justify-content-center align-items-center flex-column w-100" style="height: 90vh;">
            <i class="fa-solid fa-ban fa-2xl fs-1 mb-5" style="color: #7a7a7a;"></i>
            <p class="text-secondary fw-medium fs-5">Product with this category is empty</p>
        </div>
        @else
        <div class="product ms-5 me-5 p-5">
            <div class="card-group row row-cols-1 row-cols-md-4 g-4 gap-0 m-0 p-0 ">
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
                                        {{number_format($item['rating'], 1, ',', '.')}}
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

        @endif
</x-layout>
