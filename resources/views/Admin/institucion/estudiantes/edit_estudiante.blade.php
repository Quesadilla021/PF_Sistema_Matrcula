@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    InsertarEstudiantes
@endsection

@section('contenidoInstitucion')


<div id="id_regresar">
<a href="{{route('estudiantes')}}" id="b_regresar" >
<i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
</div>
<hr>
<div class="container">



    <div class="row">

    <div class="col-1"></div>

<div class="col-10">
<div class="card">
                    <div class="card-header">

                        <h4 class="card-title">Actualizar estudiante</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form id="formActualizarEstudiante">
                      
                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4">Cedula</label>
                          <input type="text" class="form-control mb-3 ml-5" name="cedula" value="{{$estudiante->cedula}}" required>
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Nombre</label>
                          <input type="text" class="form-control mb-3 ml-5 " name="nombre" value="{{$estudiante->nombre}}"required>
                    

                          <label class="form-label mb-4 ml-3" >Apellidos</label>
                          <input type="text" class="form-control mb-4 ml-4 " name="apellidos" value="{{$estudiante->apellidos}}"required>
                      </div>

                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4 ">Fecha de Nacimiento</label>
                          <input type="date" class="form-control mb-4 ml-2 " name="fecha_nacimiento" value="{{$estudiante->fecha_nacimiento}}"required>
                        </div>

                      <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4 ">Enfermedades</label>
                          <input type="text" class="form-control mb-4 ml-3" name="enfermedades" value="{{$estudiante->enfermedad}}">
                         
                          </div>

                          <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4" >Medicamentos</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="medicamentos" name="medicamentos">
                                <option value="{{$estudiante->medicamentos}}" selected>{{$estudiante->medicamentos}}</option>
                                <option value="Acetaminofen">Acetaminofen</option>
                                <option value="Tapcin">Tapcin</option>
                            </select>
                       
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

@extends('Admin.parts.partsjs')
@section('parteJS')
<script>

    $('#formActualizarEstudiante').submit(function(e){
        e.preventDefault();
    
        var cedula = $("input[name='cedula']").val();
        var nombre = $("input[name='nombre']").val();
        var apellidos = $("input[name='apellidos']").val();
        var fecha_nacimiento = $("input[name='fecha_nacimiento']").val();
        var enfermedades = $("input[name='enfermedades']").val();
        var medicamentos = $("#medicamentos").val();
        /* var _token = $("input[name='token']").val(); */
    
        $.ajax({
            url: "{{route('update_estudiantes', $estudiante->id_estudiante)}}",
            type: "POST",
    
            data:{
                cedula: cedula,
                nombre: nombre,
                apellidos: apellidos,
                fecha_nacimiento: fecha_nacimiento,
                enfermedades: enfermedades,
                medicamentos: medicamentos,
                "_token": $("meta[name='csrf-token']").attr("content")
            },
            success:function(response){
                if (response) {
                    /* $('#formActualizarEstudiante')[0].reset(); */
                    Swal.fire(
                        'Actualizado',
                        'El estudiante se actualizo correctamente',
                        'success'
                        );
                }
            }
        });
    
    
    });
    </script>


@endsection