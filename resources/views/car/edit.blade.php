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



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Actualizar Carro</span>
                </div>
                <div class="card-body">


                    <form method="POST" action="{{ route('car.update', $car) }}">
                        @csrf
                        @method('PATCH')

                       <div class="box box-info padding-1">
                           <div class="box-body">

                               <div class="form-group">

                                   <label for="exampleInputPlaca" class="form-label">Placa</label>
                                   <input vale="{{ $car->placa }}" name="placa" type="text" class="form-control" id="placa" required>
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputTelefono" class="form-label">telefono</label>
                                   <input vale="{{ $car->telefono }}" name="telefono" type="number" class="form-control" id="telefono" required>
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputColor" class="form-label">Color</label>
                                   <input vale="{{ $car->color }}" name="color" type="text" class="form-control" id="color" required>
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputEstado" class="form-label">Estado</label>
                                   <input vale="{{ $car->estado }}" name="estado" type="text" class="form-control" id="estado" required>
                               </div>
                               <div class="form-group">


                           </div>
                           <div class="mb-3">
                               <button type="submit" class="btn btn-primary">Actualizar</button>
                               <a href="{{ route('car.index') }}" type="submit" class="btn btn-primary">Volver</a>
                           </div>

                       </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


</html>
