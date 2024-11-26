<!DOCTYPE html>
<html lang="en">
<head>
    <x-header></x-header>
</head>
<body>
    <div class="login">
        <div class="loginWrapper d-flex align-items-center">

            <div class="logo position-absolute top-0 p-4">
                <a class="navbar-brand fw-bolder fs-5 d-flex align-items-center justify-content-between" href="/">
                    <img class="imageLogo bg-dark me-2" src="/img/logo.png" alt="">
                    boyshabit.
                </a>
            </div>

            @if (session()->has('succes'))
            <div class="alert alert-succes alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
            </div>
            @endif


            <div class="loginSection w-50 d-flex justify-content-center">
                <div class="loginForm p-5 w-75">
                    <h2 class="fw-semibold">Sign Up</h2>
                    <p class="text-secondary">Please enter your details</p>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="">
                            <input type="text" name="name" id="inputName" placeholder="Name" class="form-control rounded-0 mt-3 @error('name')
                            is-invalid
                            @enderror" id="inputName" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                        <div class="mb-3">
                          <input type="email" name="email" placeholder="Email Address" class="form-control rounded-0 mt-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail" aria-describedby="emailHelp" autofocus required>
                          @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <input type="password" name="password" placeholder="Password" class="form-control rounded-0 mt-3 @error('password') is-invalid @enderror" id="inputPassword" required>
                          @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <button type="submit" class="loginButton btn btn-dark w-100 rounded-0 mt-3">REGISTER</button>
                        <div class="createAcc pt-2 mt-3">
                            <p style="width:250px; color:#646464">Already have an account?</p>
                            <a href="/login" class="fw-semibold" id="createAcc">Login</a>
                        </div>


                        <div class="horizontalLine d-flex flex-row w-100 align-items-center justify-content-center">
                            <hr class="border border-dark border opacity-20 w-100">
                            <span class="p-2 text-secondary">or</span>
                            <hr class="border border-dark border opacity-20 w-100">
                        </div>


                        <div class="socialSignIn d-flex flex-row justify-content-between align-items-center border mt-4">
                            <div class="signInGoogle">
                                <a href="" class="border border-dark text-dark p-2 d-flex justify-content-between align-items-center w-100" style="text-decoration: none">
                                    <img src="/img/google.png" class="img-fluid pe-z" style="width:30px" alt="">
                                    Continue with Google
                                </a>
                            </div>
                            <div class="signInFacebook">
                                <div class="signInGoogle">
                                    <a href="" class="border border-dark text-dark p-2 d-flex justify-content-between align-items-center w-100" style="text-decoration: none">
                                        <img src="/img/facebook.png" class="img-fluid pe-2" style="width:30px" alt="">
                                        Continue with Facebook
                                    </a>
                                </div>
                            </div>
                        </div>



                      </form>
                </div>

            </div>
            <div class="imageSection w-50">
                <img src="/img/banner3.jpg" class="img-fluid w-100" style="height:100vh;" alt="">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


