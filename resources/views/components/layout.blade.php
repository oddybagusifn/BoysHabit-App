<!doctype html>
<html lang="en">
  <head>
    <x-header></x-header>
  </head>
  <body>
    <div class="main">
        <div class="dash-wrapper">

            {{-- cart --}}
            <x-carts></x-carts>
            {{-- cart end --}}


            {{-- navbar start --}}
            <x-navbar></x-navbar>
              {{-- navbar end --}}


              {{-- content --}}
              <div class="contentLayout">
              {{$slot}}
              </div>
            {{-- content end --}}

            {{-- footer --}}
            <x-footer></x-footer>
            {{-- footer end --}}

        </div>
    </div>

    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
