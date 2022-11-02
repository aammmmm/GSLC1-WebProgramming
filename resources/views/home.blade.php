@extends('template')
@section('content')
<h1 class="text-center">Welcome to Guitar Store</h1>
<div class="bg-dark d-flex flex-column justify-content-center align-items-center" style="height:540px">
    {{-- @for ($i = 0; $i < 3; $i++) --}}
      <div class="col-md-2 mt-3">
        <div class="card bg-dark">
            <a href="https://www.fmicassets.com/Damroot/ZoomJpg/10001/0144522500_gtr_frt_001_rr.jpg">
                <img alt="Qries" src="https://www.fmicassets.com/Damroot/ZoomJpg/10001/0144522500_gtr_frt_001_rr.jpg"
                width="269" height="100">
            </a>
            <div class="card-body">
                <p class="card-text text-light fs-5 d-flex justify-content-center">FENDER STRATOCASTER</p>
                <p class="card-text text-light fs-6 d-flex justify-content-center">$2000</p>
            </div>
        </div>
      </div>

      <div class="col-md-2 mt-3">
        <div class="card bg-dark">
            <a href="https://media.guitarcenter.com/is/image/MMGS7/L76586000001000-00-2000x2000.jpg">
                <img alt="Gbr" src="https://media.guitarcenter.com/is/image/MMGS7/L76586000001000-00-2000x2000.jpg"
                width="269" height="100">
            </a>
            <div class="card-body">
                <p class="card-text text-light fs-5 d-flex justify-content-center">GIBSON LES PAUL</p>
                <p class="card-text text-light fs-6 d-flex justify-content-center">$2000</p>
            </div>
        </div>
            <button class="btn btn-lg btn-danger" type="submit" style="width: 120px">Log in</button>
      </div>
    {{-- @endfor --}}
  </div>

@endsection
