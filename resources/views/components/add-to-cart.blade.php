
<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addProductModalLabel">Choose Size</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Gambar Produk (Kiri) -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
              <img id="modalProductImage" src="" alt="Product Image" class="img-fluid product-img">
            </div>

            <!-- Detail Produk (Kanan) -->
            <div class="col-md-6">
              <form id="modalForm" action="" method="POST">
                @csrf
                @foreach ($carts as $cart)
                    <input type="hidden" name="cart_id" id="cartId" value="{{$cart->id}}">
                @endforeach

                <!-- Produk ID (Hidden) -->
                <input type="hidden" id="modalProductId" name="product_id">
                <label for=""></label>

                <!-- Nama Produk -->
                <h2 id="modalProductName" class="fw-semibold fs-4"></h2>

                <!-- Harga Produk -->
                <p id="modalProductPrice" class="fw-medium"></p>
                <p id="modalProductStock" class="text-muted"></p>

                <!-- Input Size -->
                <div class="mb-3">
                  <label for="size" class="fw-medium">Size:</label>
                  <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                    @foreach ($sizes as $size)
                    <input type="radio" class="btn-check" value="{{$size->id}}" name="size_id" id="{{$size->size_name}}" autocomplete="off" @if ($size->id == 2)
                    @checked(true)
                    @endif>
                    <label class="btn btn-outline-dark rounded-0" for="{{$size->size_name}}">{{$size->size_name}}</label>
                    @endforeach
                </div>
                </div>

                <!-- Input Quantity -->
                <div class="mb-3">
                  <input type="hidden" id="quantityInput" name="quantity" class="form-control rounded-0 w-50" value="1">
                </div>

                <input type="hidden" name="subtotal" id="modalProductSubTotal">

                <!-- Submit Button -->
                <div class="cartSubmit w-100">
                  <button type="submit" class="btn btn-dark rounded-0 w-100 fw-medium">Add to Cart</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript untuk Modal -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addCartButtons = document.querySelectorAll('.addCart');

      addCartButtons.forEach(button => {
        button.addEventListener('click', function() {
          const productId = button.getAttribute('data-id');
          const productName = button.getAttribute('data-name');
          const productPrice = button.getAttribute('data-price');
          const productImage = button.getAttribute('data-image');
          const productSubTotal = productPrice * 1;

          // Isi modal dengan data produk
          document.getElementById('modalProductId').value = productId;
          document.getElementById('modalProductName').innerText = productName;
          document.getElementById('modalProductPrice').innerText = 'IDR ' + parseFloat(productPrice).toLocaleString('id-ID', { minimumFractionDigits: 2 });
          document.getElementById('modalProductSubTotal').value = productSubTotal;
          document.getElementById('modalProductImage').src = productImage;

          document.getElementById('modalForm').action = `/store-product/${productId}`;
        });
      });
    });
  </script>
