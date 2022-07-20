@extends('Admin.plantilla')

@section('titulo')
    Encargados
@endsection

@section('contenidoInstitucion')


<div class="container-fluid">
<div class="row"> 

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Encargados Registrados</h4>
                        
                    <div id="id_estudiante">
                        <a href="{{route('create_encargado')}}" id="b_estudiante">+ Nuevo Encargado</a>                    
                    </div>
                </div>
    
                <div class="card-body">

                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tablaEncargados">
    
                    <thead class="table-dark">
                        <tr>
                            <th>NOMBRE COMPLETO</th>
                            <th>CEDULA</th>
                            <th>F_NACIMIENTO</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>ESTUDIANTE</th>
                          
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  @foreach ($encargados as $item)
                      
                        <tr>
                            <td>{{$item->nombre}} {{$item->apellidos}}</td>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>{{$item->estudiante->nombre}} {{$item->estudiante->apellidos}}</td>
                            
    
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
</div>



@endsection


