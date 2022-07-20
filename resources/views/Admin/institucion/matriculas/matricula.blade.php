@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
   matricula
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    


<hr>
 <div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Matriculas Registradas</h4>
                          
                    <div id="id_estudiante">

                        <a href="{{route('create_matriculas')}}" id="b_estudiante">+ Nueva Matricula</a>

                    </div>
                </div>
    {{--

    
                </div>
</div> --}}

<div class="col-md-12 mt-3">
    <form class="d-inline">
        <div class="input-group mb-4">
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </div>
      </form>
    <div class="row">
        @foreach ($matriculas as $item)                        

        @php
        $foto = $item->foto;
            if ($item->foto == '') {
                $foto = '/storage/imagenes/default.jpg';
            }
        @endphp

        <div class="col-4">
            <div class="card" style="width: 16rem;">
                <img src="{{$foto}}" class="card-img-top" style="width: 16rem; height: 16rem">
                <div class="container mt-3">
                    <h5 class="card-title">{{$item->estudiante->nombre}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Encargado:</b>{{$item->encargado->nombre}}</li>
                  <li class="list-group-item"><b>Grado:</b>{{$item->grado->nombre}}</li>
                  <li class="list-group-item"><b>Fecha:</b>{{$item->fecha}}</li>
                </ul>
                <div class="card-body">
                    <div class="d-grid gap-2">                     
                        
                        <a href="{{route('editar_matriculas', $item->id_matricula)}}" data-toggle="modal" data-target="#exampleModalEdit"><button type="button" style="width: 200px;" class="btn btn-sm btn-warning" data-id id="b_editar">
                            <i class="fas fa-pencil-alt"></i></button></a>                   
                        
                        <button type="button" class="btn btn-danger"
                        onclick="eliminarMat_Alerta({{$item->id_matricula}})">
                        <i class=" fas fa-trash"></i></button>   

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#holasas{{$item->id_matricula}}">
                            <i class="fa-solid fa-camera"></i>
                          </button> 

                          <a href="{{route('pdf', $item->id_matricula)}}" ><button type="button" style="width: 200px;" class="btn btn-sm btn-secondary">
                            <i class="fa-solid fa-file-pdf"></i></button></a>   
                          
                          <div class="modal fade" id="holasas{{$item->id_matricula}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Actualizar foto</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update_foto', $item->id_matricula)}}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <hr>
                                        <h5 class="text-center mt-1 mb-1">Subir foto nueva</h5>
                                          <input type="file" name="file" class="form-control" required>                                 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-success">Guardar</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>



                </div>
              </div>
        </div>

        @endforeach

        <div class="container">
            {{$matriculas->links("pagination::bootstrap-4")}}
        </div>
    </div>

    <!-- Button trigger modal -->

  
  <!-- Modal -->




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
        title: 'Estas seguro?',
        text: "Deseas borrar esta matricula?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Mat();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
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