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
                    <table class="table table-striped" id="tabla">
    
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
                  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                 
                        
    
    
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    <a href="{{route('editar_matriculas')}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
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

