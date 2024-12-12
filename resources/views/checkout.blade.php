<x-layout>

    <div class="content" style="min-height: 100vh">
        <div class="mainCartWrapper pt-5 pb-5 container">
                        <h1 class="fw-bold">Checkout</h1>
                        <hr class="border border-dark border-1 opacity-25 ">
                            <div class="col">
                                        <div class="row-12">
                                            <div class="mainBox mt-5 d-flex ">
                                                <div class="formInput w-75 border bg-light p-5">
                                                    <form action="/addressStore" method="POST">
                                                        <h2 class="fw-semibold">1. Delivery Option</h2>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore maiores aut neque similique dignissimos. Adipisci iure aperiam modi accusantium. Dolorem, harum similique. Non hic minima fugiat dicta, ab quia adipisci.</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="delivery_option" id="JNT" checked>
                                                            <label class="form-check-label" for="JNT">
                                                                <b>JNT</b>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quibusdam sequi magnam quo tempore aliquam ex recusandae ad! Mollitia possimus fugit illo ipsum architecto quasi temporibus itaque deleniti hic eaque.</p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="delivery_option" id="SiCepat">
                                                            <label class="form-check-label" for="SiCepat">
                                                                <b>Si Cepat</b>
                                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto cum eius est facere, vel ab nulla laborum nisi, cupiditate sit fuga possimus doloremque. Sequi, accusamus non consequuntur autem temporibus mollitia.</p>
                                                            </label>
                                                        </div>

                                                        <div class="newAddress border p-3">
                                                            <h3 class="fw-semibold">Register a New Address</h3>
                                                        <div class="inputField mt-4">
                                                            <div class="fullName d-flex align-items-center flex-row">
                                                                <label for="full_name" class="w-25 d-flex align-items-center m-0">
                                                                    <h5 class="m-0">
                                                                        FULL NAME<span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <input type="text" class="w-75 p-2 form-control rounded-0" name="full_name" id="full_name" placeholder="Please enter your full name in alphabets." required>
                                                            </div>
                                                            <div class="addressDetail d-flex align-items-center flex-row mt-3">
                                                                <label for="address_detail" class="w-25 d-flex align-items-center m-0">
                                                                    <h5 class="m-0">
                                                                        ADDRESS DETAIL<span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <input type="text" class="w-75 p-2 form-control rounded-0" name="address_detail" id="address_detail" placeholder="Please enter street/address detail." required>
                                                            </div>
                                                            <div class="province d-flex align-items-center flex-row mt-3">
                                                                <label for="province" class="w-25 d-flex align-items-center m-0">
                                                                    <h5 class="m-0">
                                                                        PROVINCE<span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <select name="province" class="btn border rounded-0 dropdown-toggle bg-light p-2" id="province" required>
                                                                    <option value="">Please select a province</option>
                                                                    <option value="central_java">Central Java</option>
                                                                    <option value="west_java">West Java</option>
                                                                    <option value="east_java">East Java</option>
                                                                </select>
                                                            </div>
                                                            <div class="city d-flex align-items-center flex-row mt-5">
                                                                <label for="city" class="w-25 d-flex align-items-center m-0">
                                                                    <h5 class="m-0">
                                                                        CITY<span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <select name="city" class="btn border rounded-0 dropdown-toggle bg-light p-2" id="province" required>
                                                                    <option value="">Please select a city</option>
                                                                    <option value="semarang">Semarang</option>
                                                                    <option value="bandung">Bandung</option>
                                                                    <option value="surabaya">Surabaya</option>
                                                                </select>
                                                            </div>
                                                            <div class="district d-flex align-items-center flex-row mt-5">
                                                                <label for="district" class="w-25 d-flex align-items-center m-0">
                                                                    <h5 class="m-0">
                                                                        DISTRICT / SUB-DISTRICT<span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <select name="district" class="btn border rounded-0 dropdown-toggle bg-light p-2" id="province" required>
                                                                    <option value="">Please select a district</option>
                                                                    <option value="semarang">Sapuran</option>
                                                                    <option value="bandung">Wonosobo</option>
                                                                    <option value="surabaya">Garung</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="postalCode d-flex align-items-center flex-row mt-3">
                                                            <label for="postal_code" class="w-25 d-flex align-items-center m-0">
                                                                <h5 class="m-0">
                                                                    POSTAL CODE <span class="text-danger">*</span>
                                                                </h5>
                                                            </label>
                                                            <input type="text" class="w-75 p-2 form-control rounded-0" name="postal_code" id="postal_code" placeholder="Please enter postal code." required>
                                                        </div>
                                                        <div class="phone d-flex flex-row mt-5">
                                                            <label for="phone" class="w-25 d-flex  mt-2">
                                                                <h5 class="m-0">
                                                                    PHONE
                                                                </h5>
                                                            </label>
                                                            <div class="">
                                                                <input type="number" class="w-75 p-2 form-control rounded-0" name="phone" id="phone" placeholder="Please enter your phone number.">
                                                                <p>Please do not insert dialing code (+62) if your number has more than 11 digits </p>
                                                            </div>
                                                        </div>
                                                        <div class="mobile_phone d-flex flex-row mt-3">
                                                            <label for="mobile_phone" class="w-25 d-flexr mt-2">
                                                                <h5 class="m-0">
                                                                    MOBILE PHONE<span class="text-danger">*</span>
                                                                </h5>
                                                            </label>
                                                            <div class="">
                                                                <input type="text" class="w-75 p-2 form-control rounded-0" name="mobile_phone" id="mobile_phone" placeholder="Please enter your mobile number." required>
                                                                <p>Please do not insert dialing code (+62) if your number has more than 11 digits </p>
                                                            </div>
                                                        </div>
                                                        <div class="paymentButton mx-auto w-100 mt-4">
                                                            <input type="submit" class="addCartDetail card-link btn btn-dark rounded-0 p-2 w-100 fw-medium text-center" name="simpan" style="background-color: #1c1c1c" value="Continue to Payment">
                                                        </div>
                                                        </div>
                                                    </form>

                                                    <div class="disableBox mt-4 d-flex align-items-center bg-secondary-subtle p-2">
                                                        <h4 class="text-secondary mt-2 opacity-50">2. PAYMENT METHOD</h4>
                                                    </div>

                                                    <div class="disableBox mt-4 d-flex align-items-center bg-secondary-subtle p-2">
                                                        <h4 class="text-secondary mt-2 opacity-50">3. ORDER SUMMARY</h4>
                                                    </div>
                                                </div>

                                                <div class="orderSection w-25 ms-4">
                                                    <div class="orderDetails card border mx-auto rounded-0 bg-light w-100">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                    </div>
    </div>

</x-layout>


