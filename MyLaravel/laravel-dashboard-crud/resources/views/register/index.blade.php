@extends('layouts.main')

@section('container')

{{-- dari bootsrap sign index.html --}}
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
              {{-- // https://laravel.com/docs/8.x/csrf#main-content --}}
              @csrf
              <div class="form-floating">
                {{-- @ error ini digunakan jika validation error --}}
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                {{-- kasih pesan validation --}}
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                {{-- old('') ini digunakan jika kesalahan tidak perlu dihapus --}}
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="floatingInput">username</label>
                @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">All Ready Register? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
  
@endsection