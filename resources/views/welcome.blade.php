<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Autos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Accesorios</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="">Welcome </h5>
    <p class="card-text">Bienvenido al store de autos ferrary.</p>

    <a class="btn btn-outline-primary" href="{{route('car.index')}}">Registro carros</a>
  </div>
</div>


    <div class="container">
        <div class="col-md-6 ">



        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
