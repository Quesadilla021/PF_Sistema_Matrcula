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
    <label class="form-label mb-5" >Grado</label>

                     <form id="formGrado">                        
                        <select style="width:190px" class="form-select form-control mb-2 ml-3 " id="grado">
                            <option selected>- Seleccione -</option>
                            @foreach ($grados as $item)
                                <option value="{{$item->id_grado}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                            <input type="number" style="width:80px" class="form-control mb-2 ml-4 " name="cupo" required placeholder="CUPO">
                       
                            <button type="submit" class="mb-4 ml-3" id="b_regresar">Asignar</button>
                             <a  href="{{route('grados')}}" class="grados mb-4 ml-3" >VER GRADOS</a>
                            </form>


                           
                          
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
                        <table class="table table-striped" id="tablaMatriculasinicio">
        
                        <thead class="table-dark">
                            <tr>
                                <th>ESTUDIANTE</th>
                                <th>ENCARGADO</th>
                                <th>GRADO</th>
                                <th>FECHA MATRICULA</th>                             
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($matriculas as $item)                        
                            <tr>
                                <td>{{$item->estudiante->nombre}} {{$item->estudiante->apellidos}}</td>
                                <td>{{$item->encargado->nombre}} {{$item->encargado->apellidos}}</td>
                                <td>{{$item->grado->nombre}}</td>
                                <td>{{$item->fecha}}</td>
                                                         
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
        
        
                     </div>
                    </div>
    
                </div>
    







</div>
<div class="col-2"></div>

</div>

@endsection
