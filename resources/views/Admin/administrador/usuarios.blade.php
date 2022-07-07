@extends('Admin.plantilla')

@section('contenido_titulo')
    Usuarios Registrados
@endsection

@section('titulo')
    Usuarios Registrados
@endsection

@section('contenidoAdministrador')

<div class="table-responsive m-t-20">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha</th>
                <th>Proximo Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->rol}}</td>
                <td>{{$item->fecha}}</td>
                <td>{{$item->proximo_pago}}</td>
            </tr>
            @endforeach
        </tfoot>
    </table>
</div>

@endsection