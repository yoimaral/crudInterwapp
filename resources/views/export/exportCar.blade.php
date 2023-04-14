<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Placa</th>
        <th>Telefono</th>
        <th>Color</th>
    </tr>
    </thead>
    <tbody>
    @foreach($car as $cars)
        <tr>
            <td>{{ $cars->placa }}</td>
            <td>{{ $cars->telefono }}</td>
            <td>{{ $cars->color }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
