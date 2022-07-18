@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    pagos
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    
<div id="id_estudiante">

 <a href="{{route('create_pagos')}}" id="b_estudiante">+ Nuevo Pago</a>

</div>

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Pagos Registrados</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tablaPagos">
    
                    <thead class="table-dark">
                        <tr>
                            <th>ESTUDIANTE</th>
                            <th>CEDULA</th>    
                            <th>N° MATRICULA</th>
                            <th>METODO DE PAGO</th>
                            <th>COMPROBANTE</th>
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  @foreach ($pagos as $item)
                      
                        <tr>
                            <td>{{$item->matricula->estudiante->nombre}}</td>
                            <td>{{$item->matricula->estudiante->cedula}}</td>
                            <td>{{$item->matricula->id_matricula}}</td>
                            <td>{{$item->metodo_pago}}</td>

                            <td>
                                <button type="submit" class="btn btn-secondary" id="b_eliminar"
                                onclick="return confirm('¿Seguro de que quieres borrar?')">
                                <i class=" fas fa-trash"></i></button>
                            </td>
                 
                            <td>

                                    <a href="{{route('editar_pagos')}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
                                        <i class="fas fa-pencil-alt"></i></button></a>
    
                                              
                                        <button type="button" class="btn btn-danger"
                                        onclick="eliminarPago_Alerta({{$item->id_pago}})">
                                        <i class=" fas fa-trash"></i></button>   
    

                            </td>                 
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
    
    
                 </div>
                </div>
    
                </div>
    







</div>


</div>

@endsection

@extends('Admin.parts.partsjs')
@section('parteJS')
    
    <script>

    var idSelect;

    function eliminarPago_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Estas seguro?',
        text: "Deseas borrar este pago?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Pago();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
        'success'
        )
        } 
    })
    }

    function eliminarAJAX_Pago() {
        $.ajax({
            url: "/eliminarPago_"+idSelect,
            /* type: 'POST', */
            success: function(result) {
                location.reload();
                /* $('#tablaEncargados').DataTable().ajax.reload(); */ ///Revisar despues, por que no se quiere actualizar
            }
        });
    }

    </script>

<script>

    $(document).ready(function () {
        $('#tablaPagos').DataTable();
    });

    </script>

@endsection


