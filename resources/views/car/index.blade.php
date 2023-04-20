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

    <h1 class="text-center">Información De Agenda</h1>


    <div class="p-5">
        <table class="table table-striped position-sticky">


        <div class="row">
            <div class="col-md-2 ">
                <a class="btn btn-outline-secondary" href="{{ route('car.create') }}">Crear agenda</a>
            </div>

            <div class="col-md-2 col-md-offset-9 text-right">
                <a class="btn btn-outline-secondary" href="{{ route('export') }}">Exportar listado</a>
            </div>
        </div>


            <thead>
                <tr>
                    <th class="text-center">ID Car</th>
                    <th class="text-center">Placa</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Color</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Eliminar</th>
                    <th class="text-center">Actualizar</th>

                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($car as $cars)
                <tr>

                   <td>{{ $cars->id}}</td>
                   <td>{{ $cars->placa }}</td>
                   <td>{{ $cars->telefono }}</td>
                   <td>{{ $cars->color}}</td>
                   <td>{{ $cars->estado}}</td>


                    <td class="text-center">
                    <form action="{{ route('car.destroy', $cars) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" href="">Eliminar</button>

                    </form>

                    </td>

                    <td class="text-center"><a class="btn btn-outline-primary"
                            href="{{ route('car.edit', $cars) }}">Actualizar</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
