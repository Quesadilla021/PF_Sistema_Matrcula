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

 <a href="{{route('create_estudiantes')}}" id="b_estudiante">+ Nuevo Estudiante</a>

</div>

<hr>
<div class="col-md-12">
             
             <div class="card">
                <div class="card-header">
    
                    <h4 class="card-title">Estudiantes Registrados</h4>
                                      
                </div>
    
                <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped" id="tabla">
    
                    <thead class="table-dark">
                        <tr>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>TELEFONO</th>
                            <th>F_NACIMIENTO</th>
                            <th>ENFERMEDADES</th>
                            <th>MEDICAMENTOS</th>
                            <th>OPCIONES</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>
                  @foreach ($estudiantes as $item)
                      
                        <tr>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellidos}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td>{{$item->medicamentos}}</td>
                            <td>{{$item->enfermedad}}</td>
    
                            <td>
                                {{-- <form id="eliminarEstudiante" method="POST"> --}}
                                    <a href="{{route('editar_estudiantes', $item->id_estudiante)}}" data-toggle="modal" data-target="#exampleModalEdit" ><button type="button" class="btn btn-sm btn-warning" data-id id="b_editar">
                                        <i class="fas fa-pencil-alt"></i></button></a>
                                    @csrf                                        
                                    {{-- @method('DELETE') --}}
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="eliminarEst_Alerta({{$item->id_estudiante}})">
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

