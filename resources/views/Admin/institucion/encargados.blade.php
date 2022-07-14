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
                    <table class="table table-striped" id="tabla">
    
                    <thead class="table-dark">
                        <tr>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>F_NACIMIENTO</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                          
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  
                        <tr>
                   
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
    
    
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    <a href="{{route('editar_encargados')}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
                                        <i class="fas fa-pencil-alt"></i></button></a>
    
                                              
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" id="b_eliminar"
                                        onclick="return confirm('¿Seguro de que quieres borrar?')">
                                        <i class=" fas fa-trash"></i></button>
    
                                </form>
                            </td>
                  
                      
                           
                        </tr>
                 
                    </tbody>
                  </table>
    
    
                 </div>
                </div>
    
                </div>
    







</div>


</div>

@endsection

