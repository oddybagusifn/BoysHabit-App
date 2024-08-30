<x-layout>
<div class="login">
    <div class="loginWrapper">
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
        <div class="loginForm">
            <h2>LOGIN</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                  <input type="email" name="email" placeholder="Email Address" class="form-control rounded-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail" aria-describedby="emailHelp" autofocus required>
                  @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 mt-3">
                  <input type="password" name="password" placeholder="Password" class="form-control rounded-0" id="inputPassword">
                </div>
                <button type="submit" class="loginButton btn btn-dark w-100 rounded-0 mt-3">LOGIN</button>
                <div class="createAcc pt-2 mt-3">
                    <p style="width:200px; color:#646464">Don't have an account?</p>
                    <a href="/register" class="fw-semibold" id="createAcc">Create One</a>
                </div>
              </form>
        </div>
    </div>
</div>
</x-layout>
