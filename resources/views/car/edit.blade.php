<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Carro</span>
                </div>
                <div class="card-body">


                    <form method="POST" action="{{ route('car.update', $car) }}">
                        @csrf
                        @method('PATCH')

                       <div class="box box-info padding-1">
                           <div class="box-body">

                               <div class="form-group">

                                   <label for="exampleInputPlaca" class="form-label">Placa</label>
                                   <input vale="{{ $car->placa}}" name="placa" type="text" class="form-control" id="placa" required>
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputTelefono" class="form-label">telefono</label>
                                   <input vale="{{$car->telefono}}" name="telefono" type="number" class="form-control" id="telefono" >
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputColor" class="form-label">Color</label>
                                   <input vale="{{$car->color}}" name="color" type="text" class="form-control" id="color">
                               </div>

                               <div class="form-group">

                                   <label for="exampleInputEstado" class="form-label">Estado</label>
                                   <input vale="{{$car->estado}}" name="estado" type="text" class="form-control" id="estado" required>
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
