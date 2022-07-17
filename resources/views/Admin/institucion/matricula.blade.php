@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
   matricula
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    
<div id="id_estudiante">

 <a href="{{route('create_matriculas')}}" id="b_estudiante">+ Nueva Matricula</a>

</div>

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Matriculas Registradas</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tablaMatriculas">
    
                    <thead class="table-dark">
                        <tr>
                            <th>ESTUDIANTE</th>
                            <th>ENCARGADO</th>
                            <th>GRADO</th>
                            <th>FECHA MATRICULA</th>
                            <th>METODO PAGO</th>
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($matriculas as $item)                        
                        <tr>
                            <td>{{$item->estudiante->nombre}}</td>
                            <td>{{$item->encargado->nombre}}</td>
                            <td>{{$item->grado->nombre}}</td>
                            <td>{{$item->fecha}}</td>
                            <td></td>

                            <td>
                                    <a href="{{route('editar_matriculas', $item->id_matricula)}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
                                        <i class="fas fa-pencil-alt"></i></button></a>
                                       
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="eliminarMat_Alerta({{$item->id_matricula}})">
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

    function eliminarMat_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Mat();

        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        } 
    })
    }

    function eliminarAJAX_Mat() {
        $.ajax({
            url: "/eliminarMat_"+idSelect,
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
        $('#tablaMatriculas').DataTable();
    });

    </script>
    

@endsection