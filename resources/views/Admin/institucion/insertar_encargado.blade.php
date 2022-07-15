@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    InsertarEstudiantes
@endsection

@section('contenidoInstitucion')


<div id="id_regresar">
<a href="{{route('encargados')}}" id="b_regresar" >
<i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
</div>
<hr>
<div class="container">

    <div class="row">

    <div class="col-1"></div>

<div class="col-10">

<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Formulario de Encargados</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form action="" enctype="multipart/form-data"
                      class="form-group form-grid" method="POST">
                      @csrf

                      <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4" >Estudiante</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " >
                                <option selected>-Seleccione-</option>
                                <option value="1">Yansineth Vargas Bustos</option>
                                <option value="2">Ian Quesada Rojas</option>
                                <option value="3">Gerald Ramirez Hernadez</option>
                            </select>
                       
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4">Cedula  </label>
                          <input type="text" class="form-control mb-3 ml-5" name="cedula" required>
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Nombre</label>
                          <input type="text" class="form-control mb-3 ml-5 " name="nombre" required>
                    

                          <label class="form-label mb-4 ml-3" >Apellidos</label>
                          <input type="text" class="form-control mb-4 ml-4 " name="apellidos" required>
                      </div>



                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Fecha de Nacimiento</label>
                          <input type="date" class="form-control mb-4 ml-2 " name="fecha_nacimiento" required>
                          </div>

                          
                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4">Telefono</label>
                          <input type="text" class="form-control mb-3 ml-5" name="telefono" required>
                          </div>

                          <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 " >Dirección</label>
                            <textarea name="direccion" class="form-control mb-4 ml-5" cols="60" rows="3"></textarea>
                      </div>
                      



                      <div class="mx-auto" style="width: 200px;">
                      <div class="text center">  <button type="submit" class="btn btn-sm btn-info" id="b_estudiante" ><i class="fa-solid fa-floppy-disk"></i> Guardar</button></div>
                      </div>
                  </form>

               
              </div>
              <hr>
               <br>
          </div>


            </div>

             </div>
</div>




<div class="col-1"></div>

</div>

</div>



@endsection