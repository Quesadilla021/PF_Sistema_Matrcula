@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    InsertarMatricula
@endsection

@section('contenidoInstitucion')





<div class="container">
    <div class="row">

        <div id="id_regresar">
            <a href="{{route('matriculas')}}" id="b_regresar" >
            <i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
            </div>
    <div class="col-1"></div>

<div class="col-10">

<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Proceso de Matricula</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form id="formMatricula">

                      <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4" >Estudiante</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="estudiante">
                            @foreach ($estudiantes as $item)
                                <option value="{{$item->id_estudiante}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                       
                      </div>
                      <hr>

                    <div class="form-inline col-mb-5 px-2 ">
                        <label class="form-label mb-4" >Encargado</label>
                        
                        <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="encargado">
                          @foreach ($encargados as $item)
                              <option value="{{$item->id_encargado}}">{{$item->nombre}}</option>
                          @endforeach
                      </select>
                     
                    </div>
                      <hr>

                      <div class="form-inline col-mb-5 px-2 ">
                        <label class="form-label mb-4" >Grado</label>
                        
                        <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="grado">
                          @foreach ($grados as $item)
                              <option value="{{$item->id_grado}}">{{$item->nombre}}</option>
                          @endforeach
                      </select>
                     
                    </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Fecha de Matricula</label>
                          <input type="date" class="form-control mb-4 ml-2 " name="fecha" required>
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

@extends('Admin.parts.partsjs')
@section('parteJS')
    
<script>

    $('#formMatricula').submit(function(e){
        e.preventDefault();
    
        var estudiante = $("#estudiante").val();
        var encargado = $("#encargado").val();
        var grado = $("#grado").val();
        var fecha = $("input[name='fecha']").val();
    
        $.ajax({
            url: "{{route('store_matricula')}}",
            type: "POST",
    
            data:{
                estudiante: estudiante,
                encargado: encargado,
                grado: grado,
                fecha: fecha,
                "_token": $("meta[name='csrf-token']").attr("content")
            },
            success:function(response){
                if (response) {
                    $('#formMatricula')[0].reset();
                    Swal.fire(
                        'Registrado',
                        'La matricula se realizo correctamente',
                        'success'
                        );
                }
            }
        });
    
    
    });
    </script>
    

@endsection