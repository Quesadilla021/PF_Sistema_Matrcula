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
                        </tr>
                    </thead>
    
                    <tbody>
                  
                        @foreach ($grados as $item)
                        <tr>

                            <td>{{$item->nombre}}</td>
                            <td>{{$item->cantidad}}</td>
                           
                        </tr>
                        @endforeach
                 
                    </tbody>
                  </table>
    
    
                 </div>
                </div>
    
                </div>
    







</div>
<div class="col-3"></div>


</div>

@endsection

