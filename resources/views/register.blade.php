<x-layout>
    <div class="login">
        <div class="loginWrapper">
            <div class="loginForm">
                <h2>CREATE YOUR ACCOUNT</h2>
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
                <form action="/register" method="POST">
                    @csrf
                    <div class="">
                        <input type="text" name="name" placeholder="Name" class="form-control rounded-0 mt-3 @error('name')
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
                  </form>
            </div>
        </div>
    </div>
    </x-layout>
