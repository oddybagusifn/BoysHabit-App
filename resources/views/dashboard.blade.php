
<x-layout>
    {{-- Hero Section --}}
    <div class="heroSection">
        <div class="carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/heroImage.jpg" class="d-block w-100 img-fluid bg-black bg-gradient" style="filter:brightness(90%)" alt="...">
                        <div class="heroText card-img-overlay">
                            <div class="slideContent">
                                <h1 class="brandName fw-bold fst-italic"><span style="color: #f4f4f6">BOYS</span>HABIT</h1>
                                <h3 class="fw-semibold fst-italic"><span style="color: #f4f4f6">Endless Style,</span> Limitless Choices</h3>
                            </div>
                        </div>
                  </div>
                  <a href="#">
                    <div class="carousel-item">
                        <img src="img/kaws.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="slide card-img-overlay">
                            <img src="img/kawsLogo.jpg" style="width:200px;" alt="">
                            <div class="slideText2">
                                <h3 class="fw-bold" style="color: #f4f4f6">KAWS Edition</h3>
                                <p style="color: #f4f4f6">Celebrating the Premiere of Kaws 2024</p>
                                <p class="btn btn-light rounded-0 fw-semibold">View More</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="carousel-item">
                        <img src="img/onePiece.png" class="d-block w-100 img-fluid" alt="...">
                        <div class="slide3 card-img-overlay">
                            <div class="slideText3">
                                <h3 class="slideTitle3 fw-bold" style="color: #f4f4f6">One Piece 25th Aniversary</h3>
                                <p style="color: #f4f4f6">Celebrating One Piece 25th Aniversary</p>
                                <p class="btn btn-light rounded-0 fw-semibold">View More</p>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

    </div>
    {{-- Hero Section End--}}

    {{-- Content Section  --}}
        <div class="content">
            <div class="contentWrapper">

                {{-- Best Seller --}}
                <div class="bestSellerDash">
                    <h1 class="sectionTitle fw-bold pt-5 pb-5">BEST SELLER</h1>

                    <div class="topProducts">
                        <div class="productItems pt-3 ps-5 pe-5 rounded">
                            <div class="row row-cols-1 row-cols-md-4 pb-3 pt-3 ps-2 pe-2">
                                @foreach ($dataProducts as $data)
                                <div class="col">
                                    <div class="card rounded-0" style="width: 23rem;">
                                        <img src="img/heroImage.jpg" class="card-img-top rounded-0" alt="...">
                                        <div class="card-body">
                                            <div class="ratingStar">

                                            </div>
                                            <h5 class="card-title fw-semibold">{{$data['name']}}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush border-0">
                                            <li class="list-group-item fw-bold border-0">IDR 100.000</li>
                                            <li class="list-group-item border-0">Size: XL</li>
                                            <li class="list-group-item border-0">Stock: 100</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="addCart card-link btn btn-dark rounded-0 fw-medium">Add to Cart</a>
                                            <a href="#" class="viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark" style="margin-left: 120px">View More</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Best Seller End --}}

                {{-- Categories --}}

                <div class="categoryDash">
                    <h1 class="sectionTitle fw-bold pt-5 pb-5">CATEGORIES</h1>

                </div>

                {{-- Categories End --}}


            </div>
        </div>
    {{-- Content Section End --}}

</x-layout>
