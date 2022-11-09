@extends('template')
@section('content')

<div class="bg-dark d-flex flex-column justify-content-center align-items-center" style="height:540px">

    <form action="{{ url('/home') }}" class="d-flex flex-column align-items-center">

        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" style="width: 500px">
          <label for="floatingInput">Email address</label>
            @error('email')
              {{ $message }}
            @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" style="width: 500px">
          <label for="floatingPassword">Password</label>
            @error('password')
            {{ $message }}
            @enderror
        </div>

        <div class="checkbox mb-2">
          <label >
            <input type="checkbox" value="remember" name="remember" id="cek" >
            <label for="cek" class="text-white p-1">Remember me</label>
          </label>
        </div>
        <button class="btn btn-lg btn-danger" type="submit" style="width: 400px">Log in</button>

      </form>
</div>

@endsection
