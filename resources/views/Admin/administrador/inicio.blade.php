@extends('Admin.plantilla')

@section('contenido_titulo')
   
@endsection

@section('titulo')
    Estudiantes
@endsection

@section('contenidoInstitucion')



<div class="container-fluid">
<div class="row">
    
<div id="id_estudiante">

<div class="form-inline col-mb-5 px-2">
                          <label class="form-label mb-4" >Grado</label>
                          
                          <select style="width:190px" class="form-select form-control mb-4 ml-3 " >
                                <option selected>-Seleccione-</option>
                                <option value="1">Primero</option>
                                <option value="2">Segundo</option>
                                <option value="3">Tercero</option>
                            </select>


                            <input type="number" style="width:80px" class="form-control mb-4 ml-4 " name="cupo" required placeholder="CUPO">
                       
                            <button  class="mb-4 ml-3" id="b_asignar">Asignar</button>


                           
                             <a  href="{{route('grados')}}" class="grados" >VER GRADOS</a>
                          
                      </div>

</div>

<hr>
<div class="col-2"></div>
<div class="col-md-8">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Estudiantes Matriculados</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tabla">
    
                    <thead class="table-dark">
                        <tr>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>GRADO</th>
                            <th>ELIMINAR</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                 
    
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                              
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
<div class="col-2"></div>

</div>

@endsection

