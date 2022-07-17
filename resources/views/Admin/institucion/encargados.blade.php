@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    Encargados
@endsection

@section('contenidoInstitucion')


<div class="container-fluid">
<div class="row">
    
<div id="id_estudiante">

 <a href="{{route('create_encargado')}}" id="b_estudiante">+ Nuevo Encargado</a>

</div>

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Encargados Registrados</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tablaEncargados">
    
                    <thead class="table-dark">
                        <tr>
                            <th>ESTUDIANTE</th>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>F_NACIMIENTO</th>
                            {{-- <th>TELEFONO</th> --}}
                            <th>DIRECCION</th>
                          
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  @foreach ($encargados as $item)
                      
                        <tr>
                   
                            <td>{{$item->estudiante->nombre}}</td>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellidos}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            {{-- <td>{{$item->telefono}}</td> --}}
                            <td>{{$item->direccion}}</td>
    
    
                            <td>
                                {{-- <form id="eliminarEstudiante" method="POST"> --}}
                                    <a href="{{route('editar_encargados', $item->id_encargado)}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
                                        <i class="fas fa-pencil-alt"></i></button></a>
                                    @csrf                                        
                                    {{-- @method('DELETE') --}}
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="eliminarEnc_Alerta({{$item->id_encargado}})">
                                        <i class=" fas fa-trash"></i></button>
    
                                {{--  --}}
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

    function eliminarEnc_Alerta(id) {
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
        eliminarAJAX_Enc();

        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        } 
      })
    }

    function eliminarAJAX_Enc() {
        $.ajax({
            url: "/eliminarEnc_"+idSelect,
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
        $('#tablaEncargados').DataTable();
    });

    </script>
    
@endsection


