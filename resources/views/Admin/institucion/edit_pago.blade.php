@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    InsertarPago
@endsection

@section('contenidoInstitucion')


<div id="id_regresar">
<a href="{{route('pagos')}}" id="b_regresar" >
<i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
</div>

<hr>
<div class="container">



    <div class="row">

    <div class="col-1"></div>

<div class="col-10">






<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Editar de Pago</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form action="" enctype="multipart/form-data"
                      class="form-group p-2 form-grid" method="POST">
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
                      <hr>


                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4">N° Matrícula</label>
                          <input type="text" class="form-control mb-3 ml-5"  required>
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Total</label>
                          <input type="text" class="form-control mb-3 ml-5 " name="nombre" required>
                      </div>
                      <hr>

                      <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4" >Metodo de pago</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " >
                                <option selected>-Seleccione-</option>
                                <option value="1">Efectivo</option>
                                <option value="2">Transferencia</option>
                                <option value="3">Tarjeta</option>
                            </select>
                       
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Subir comprobante</label>
                          <input type="file" class="form-control mb-4 ml-2 " name="comprobante" >
                          </div>

                      



                      <div class="mx-auto" style="width: 200px;">
                      <div class="text center">  <button type="submit" class="btn btn-sm btn-info" id="b_estudiante" ><i class="fa-solid fa-floppy-disk"></i>Actualizar</button></div>
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