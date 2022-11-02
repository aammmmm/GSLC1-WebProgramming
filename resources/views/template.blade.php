<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Guitar</title>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="p-2 navbar-collapse d-flex justify-content-start" id="navbarNav">
            <ul class="navbar-nav link-light">
                <h2>GUITARSTORE</h2>
            </ul>
        </div>
        <div class="p-1 pe-4 navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
              <a class= "link-success nav-link col-12 py-3 pink" href="/home">Home</a>
          </ul>
          <ul class="navbar-nav">
            <a class="link-success nav-link col-12 py-3 pink" href="/login">Log In</a>
        </ul>
        </div>
    </nav>

  </head>

  <body>
        @yield('content')
  </body>

  <br>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-center">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item ">
            <a class= "link-info nav-link col-12 py-3 pink" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class= "link-success nav-link col-12 py-3 pink" href="https://twitter.com">Twitter</a>
          </li>
          <li class="nav-item">
            <a class="link-success nav-link col-12 py-3 pink" href="https://www.facebook.com">Facebook</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</html>
