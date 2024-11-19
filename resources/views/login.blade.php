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

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
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
                    <h2 class="fw-semibold">Sign In</h2>
                    <p class="text-secondary">Please enter your details</p>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                          <input type="email" name="email" placeholder="Email Address" class=" pt-2 pb-2 form-control m-0 p-1 rounded-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail" aria-describedby="emailHelp" autofocus required>
                          @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                          @enderror
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 mt-3 d-flex align-items-center position-relative password">
                          <input type="password" name="password" placeholder="Password" class=" pt-2 pb-2 form-control m-0 p-1 rounded-0" id="inputPassword">
                          <span toggle="#password-field" id="togglePassword" class="position-absolute end-0 pe-4 fw-medium toggle-password" style="cursor: pointer;">
                            show
                          </span>

                          <script>
                            const togglePassword = document.getElementById('togglePassword');
                            const passwordInput = document.getElementById('inputPassword');

                            togglePassword.addEventListener('click', function () {
                                // Toggle input type between password and text
                                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                passwordInput.setAttribute('type', type);

                                // Toggle the text of the span
                                this.textContent = type === 'password' ? 'Show' : 'Hide';
                            });
                          </script>

                        </div>
                        <button type="submit" class="loginButton btn btn-dark w-100 rounded-0 mt-3">LOGIN</button>
                        <div class="createAcc pt-2 mt-3">
                            <p style="width:200px; color:#646464">Don't have an account?</p>
                            <a href="/register" class="fw-semibold" id="createAcc">Create One</a>
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


