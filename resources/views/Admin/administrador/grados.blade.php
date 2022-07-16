@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
   grados
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    
<div id="id_regresar">
<a href="{{route('inicio')}}" id="b_regresar" >
<i class="fas fa-arrow-circle-left"></i> Atrás</button></a>
</div>

<hr>
<div class="col-3"></div>
<div class="col-md-6">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Cupos Asignados</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tabla">
    
                    <thead class="table-dark">
                        <tr>
                            <th>GRADO</th>
                            <th>CUPO</th>
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  
                        <tr>
                            <td>Primero</td>
                            <td>40</td>
                        
    
    
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    <a href="{{route('editgrados')}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
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
<div class="col-3"></div>


</div>

@endsection

