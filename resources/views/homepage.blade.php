    <x-layout>
        {{-- Hero Section --}}
        <div class="heroSection">
            <div class="carousel">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/heroImage.jpg" class="d-block w-100 img-fluid bg-black bg-gradient" alt="...">
                            <div class="heroText h-75 card-img-overlay d-flex justify-content-center align-items-center">
                                <div class="slideContent d-flex justify-content-center align-items-center">
                                    <h1 class="brandName fw-bold fst-italic">BOYSHABIT</h1>
                                    <h3 class="fw-semibold fst-italic" style="color: #f4f4f6;">Endless Style, Limitless Choices</h3>
                                </div>
                            </div>
                      </div>
                      <a href="#">
                        <div class="carousel-item">
                            <img src="img/kaws.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="slide card-img-overlay">
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
                <div class="content container-fluid">
                    <div class="contentWrapper">

                    {{-- Best Seller --}}
                    <div class="bestSellerDash" id="homepageBestSeller">
                        <div class="bestSellerWrapper pt-5 mt-5">
                            <div class="topProducts">
                                <div class="card-group gap-4">
                                    @foreach ($products->take(2) as $data)
                                    @foreach ($data->items as $item)
                                        <a class="aCard" href="/detail_product/{{$data->id}}">
                                            <div class="col">
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
                                                        <div class="card-body d-flex justify-content-between align-items-center">
                                                            <a href="/detail_product/{{$data->id}}" class="ms-4 me-auto viewMore card-link link-offset-2 link-underline link-underline-opacity-0 text-dark  me-3">View More</a>
                                                            <a href="#" class="addCart card-link btn btn-dark rounded-0 fw-medium me-4">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endforeach
                                </div>
                            </div>

                            <div class="topDescription">
                                <div class="topWrapper">
                                    <div class="descElement">
                                        <h1 class="fw-semibold fs-2">Best Seller in BoysHabit</h1>
                                        <br>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam cum voluptates quidem incidunt.</p>
                                        <br>
                                        <button class="buttonLight btn btn-light w-50 rounded-0">View More</button>
                                    </div>
                                    <div class="arrowButton">
                                        <a href="#">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Best Seller End --}}

                    <div class="discountDash">
                        <div class="card-group mt-5 pt-5">
                            <div class="card">
                              <img src="img/heroImage.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                              <img src="img/heroImage.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card">
                              <img src="img/heroImage.jpg" class="card-img-top" alt="...">
                            </div>
                          </div>
                    </div>

                    {{-- Categories --}}

                    <div class="categoryDash mb-5 pb-5">
                        <div class="categoryItem mt-5 pt-5">
                            <div class="row row-cols-1 row-cols-md-3 g-4 gap-0 m-0 p-0">
                                @foreach ($categories->take(6) as $category)
                                <a href="/category/{{ $category->id }}">
                                    <div class="col">
                                        <div class="card rounded-0">
                                          <img src="img/heroImage.jpg" class="card-img-top rounded-0" alt="...">
                                          <div class="card-body text-center">
                                            <h5 class="card-title">{{$category['category_name']}}</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                          </div>
                                        </div>
                                    </div>
                                </a>
                                  @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- Categories End --}}

                    {{-- App Benefit --}}

                    <div class="appBenefitDash m-5">
                        <div class="appBenefitWrapper">
                            <div class="benefitContent p-5">
                                <h1 class="fw-semibold">Why BoysHabit?</h1>
                            </div>
                        </div>
                    </div>

                    {{-- App Benefit End --}}
            </div>
           </div>
        {{-- Content Section End --}}

    </x-layout>


