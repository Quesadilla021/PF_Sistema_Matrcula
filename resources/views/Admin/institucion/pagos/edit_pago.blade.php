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


                <form id="formActualizarPago">
                    @csrf

                    <div class="form-inline col-mb-5 px-2 ">
                        <label class="form-label mb-4" >Estudiantes Matriculados</label>
                        
                        <select style="width:190px" class="form-select form-control mb-4 ml-3 " id="matricula">
                        <option value="{{$pago->matricula->id_matricula}}">{{$pago->matricula->estudiante->nombre}}</option>
                            @foreach ($matriculas as $item)
                              <option value="{{$item->id_matricula}}">{{$item->estudiante->nombre}}</option>
                          @endforeach
                      </select>
                     
                    </div>
                    <hr>

                    <div class="form-inline col-mb-5 px-2">
                        <label class="form-label mb-4 ">Total</label>
                        <input type="text" class="form-control mb-3 ml-5" value="{{$pago->total}}" name="total" required>
                    </div>
                    <hr>

                    <div class="form-inline col-mb-5 px-2 ">
                        <label class="form-label mb-4" >Metodo de pago</label>
                        
                        <select style="width:190px" id="metodoPago" class="form-select form-control mb-4 ml-3 " >
                              <option value="{{$pago->metodo_pago}}" selected>{{$pago->metodo_pago}}</option>
                              <option value="Efectivo">Efectivo</option>
                              <option value="Transferencia">Transferencia</option>
                          </select>
                     
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

@extends('Admin.parts.partsjs')
@section('parteJS')
<script>

    $('#formActualizarPago').submit(function(e){
        e.preventDefault();
    
        var matricula = $("#matricula").val();
        var total = $("input[name='total']").val();
        var metodoPago = $("#metodoPago").val();
    
        $.ajax({
            url: "{{route('update_pago', $pago->id_pago)}}",
            type: "POST",
    
            data:{
                matricula: matricula,
                total: total,
                metodoPago: metodoPago,
                "_token": $("meta[name='csrf-token']").attr("content")
            },
            success:function(response){
                if (response) {
                    /* $('#formActualizarEstudiante')[0].reset(); */
                    Swal.fire(
                        'Actualizado',
                        'El pago se actualizo correctamente',
                        'success'
                        );
                }
            }
        });
    
    
    });
    </script>


@endsection