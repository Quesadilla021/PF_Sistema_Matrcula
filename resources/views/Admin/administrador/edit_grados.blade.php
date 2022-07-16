@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    EditarGrados
@endsection

@section('contenidoInstitucion')


<div id="id_regresar">
<a href="{{route('grados')}}" id="b_regresar" >
<i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
</div>
<hr>
<div class="container">



    <div class="row">

    <div class="col-1"></div>

<div class="col-10">






<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Editar Grado</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form action="" enctype="multipart/form-data"
                      class="form-group p-2 form-grid" method="POST">
                      @csrf

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 " >Nombre </label>
                          <input type="text" class="form-control mb-4 ml-5" name="cedula" >
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Grado</label>
                          <input type="Number" class="form-control mb-3 ml-5 " name="nombre" required>
                    

                          
                      </div>


                      <div class="mx-auto" style="width: 200px;">
                      <div class="text center">  <button type="submit" class="btn btn-sm btn-info" id="b_estudiante" ><i class="fa-solid fa-floppy-disk"></i> Actualizar</button></div>
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