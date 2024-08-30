<x-layout>
    <div class="product">
        <div class="card-group row row-cols-1 row-cols-md-4 g-4 gap-0 m-0 p-0 gap-4">
            @foreach ($products as $data)
            @foreach ($data->items as $item)
                <div class="col">
                    <div class="card rounded-0 me-0 w-100">
                        <img src="img/heroImage.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-body ms-4">
                            <h5 class="card-title fw-semibold">{{ $data->name }}</h5>
                            <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    {{number_format($item['rating'], 1, ',', '.')}}
                            </div>
                        </div>
                        <ul class="list-group list-group-flush border-0 ms-4">
                            <li class="list-group-item fw-bold border-0">IDR {{ $item->price }}</li>
                            <li class="list-group-item border-0">Size: XL</li>
                            <li class="list-group-item border-0">Stock: {{ $item->qty_in_stock }}</li>
                        </ul>
                        <br>
                        <div class="bottomCard list-group list-group-flush">
                            <div class="card-body ms-auto me-4">
                                <a href="#" class="viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark  me-3">View More</a>
                                <a href="#" class="addCart card-link btn btn-dark rounded-0 fw-medium">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
        </div>
    </div>
</x-layout>
