@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    pagos
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Pagos Registrados</h4>
                                   
                    <div id="id_estudiante">

                        <a href="{{route('create_pagos')}}" id="b_estudiante">+ Nuevo Pago</a>
                       
                       </div>
                       
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
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Holas{{$item->id_pago}}">
                                    <i class="fa-solid fa-file"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="Holas{{$item->id_pago}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Comprobante de pago</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="{{route('descargar_comprobante', $item->id_pago)}}"><button type="button" class="btn btn-sm btn-success" data-id id="b_editar">
                                                <i class="fa-solid fa-file-arrow-down"></i> Descargar Comprobante</button></a>

                                            <form action="{{route('update_comprobante', $item->id_pago)}}" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <hr>
                                                <h5 class="text-center mt-1 mb-1">Subir comprobante nuevo</h5>
                                            <input type="file" name="file" class="form-control" accept=".pdf,.doc" required>   
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                 
                            <td>

                                    <a href="{{route('editar_pagos', $item->id_pago)}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
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


