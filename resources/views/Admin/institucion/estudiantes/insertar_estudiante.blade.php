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

                        <h4 class="card-title">Formulario de Estudiantes</h4>
                                    
                    </div>

                    <div class="card-body">

                    <div class="card card-user">
              
              <div class="card-body">


                  <form id="formEstudiante">
                      
                      <div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4">Cedula</label>
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

                      <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4 ">Enfermedades</label>
                          <input type="text" class="form-control mb-4 ml-3" name="enfermedades">
                         
                          </div>

                          <div class="form-inline col-mb-5 px-2 ">
                          <label class="form-label mb-4" >Medicamentos</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="medicamentos" name="medicamentos">
                                <option value="Ninguna" selected>Ninguna</option>
                                <option value="Acetaminofen">Acetaminofen</option>
                                <option value="Tapcin">Tapcin</option>
                            </select>
                       
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

    $('#formEstudiante').submit(function(e){
        e.preventDefault();
    
        var cedula = $("input[name='cedula']").val();
        var nombre = $("input[name='nombre']").val();
        var apellidos = $("input[name='apellidos']").val();
        var fecha_nacimiento = $("input[name='fecha_nacimiento']").val();
        var enfermedades = $("input[name='enfermedades']").val();
        var medicamentos = $("#medicamentos").val();
        /* var _token = $("input[name='token']").val(); */
    
        $.ajax({
            url: "{{route('store_estudiantes')}}",
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
                    $('#formEstudiante')[0].reset();
                    Swal.fire(
                        'Registrado',
                        'El estudiante se agrego correctamente',
                        'success'
                        );
                }
            }
        });
    
    
    });
    </script>


@endsection