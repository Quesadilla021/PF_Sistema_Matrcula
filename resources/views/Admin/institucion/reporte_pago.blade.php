@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    InsertarEncargado
@endsection

@section('contenidoInstitucion')

<hr>
<div class="container">

    <div class="row">

    <div class="col-1"></div>

<div class="col-10">

<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Seccion de Reportes</h4>
                                    
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
                          <label class="form-label mb-4 ">Fecha de Matricula</label>
                          <input type="date" class="form-control mb-4 ml-2 " name="fecha_nacimiento" required>
                          </div>

                          
                          <div align="end">
                                 <a  href="" class=" btn btn-danger" >Generar PDF</a>
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