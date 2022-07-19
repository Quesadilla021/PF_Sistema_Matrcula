<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{$matricula->estudiante->nombre}}</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo" style="background-color: #555555">
        <img src="{{$path}}/assets/images/am.fw.png">
      </div>
      <img src="{{$path}}{{$matricula->foto}}" style="width: 10rem; height: 10rem; margin-left: 220px;">
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Estudiante:</div>
          <h2 class="name">{{$matricula->estudiante->nombre}} {{$matricula->estudiante->apellidos}}</h2>
          <div class="to">Cedula: </div>
          <h2 class="name">{{$matricula->estudiante->cedula}}</h2>
          <div class="to">Grado: </div>
          <h2 class="name">{{$matricula->grado->nombre}}</h2>
          <div class="to">Fecha de nacimiento: </div>
          <h2 class="name">{{$matricula->estudiante->fecha_nacimiento}}</h2>
          <div class="to">Medicamentos: </div>
          <h2 class="name">{{$matricula->estudiante->medicamentos}}</h2>
          <div class="to">Enfermedades: </div>
          <h2 class="name">{{$matricula->estudiante->enfermedad}}</h2>
          <hr>
          <div class="to">Encargado: </div>
          <h2 class="name">{{$matricula->encargado->nombre}} {{$matricula->encargado->apellidos}}</h2>
          <div class="to">Direccion: </div>
          <h2 class="name">{{$matricula->encargado->direccion}}</h2>
          <div class="to">Fecha de nacimiento: </div>
          <h2 class="name">{{$matricula->encargado->fecha_nacimiento}}</h2>
        </div>
      </div>
{{--       <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">Informacion del vehiculo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">Marca: </td>
            <td class="desc"><h3>{{$vehiculo->marca->nombre}}</td>
            <td class="no">Modelo: </td>
            <td class="desc"><h3>{{$vehiculo->modelo->nombre}}</td>
          </tr>
          <tr>
            <td class="no">Año: </td>
            <td class="desc"><h3>{{$vehiculo->año}}</td>
            <td class="no">Cilindraje: </td>
            <td class="desc"><h3>{{$vehiculo->cilindraje->nombre}}</td>
          </tr>
          <tr>
            <td class="no">Combustible: </td>
            <td class="desc"><h3>{{$vehiculo->combustible->nombre}}</td>
            <td class="no">Cilindraje: </td>
            <td class="desc"><h3>{{$vehiculo->cilindraje->nombre}}</td>
          </tr>
          <tr>
            <td class="no">Color Interior: </td>
            <td class="desc"><h3>{{$vehiculo->colorInt->nombre}}</td>
            <td class="no">Color Interior: </td>
            <td class="desc"><h3>{{$vehiculo->colorExt->nombre}}</td>
          </tr>
          <tr>
            <td class="no">Recibe Cambio: </td>
            <td class="desc"><h3>@if ($vehiculo->recibe == 1)
              Si
          @else
              No
          @endif</td>
            <td class="no">Negociable: </td>
            <td class="desc"><h3>@if ($vehiculo->negociable == 1)
              Si
          @else
              No
          @endif</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Precio: </td>
            <td>{{$vehiculo->precio}}</td>
          </tr>
        </tfoot>
      </table> --}}
      {{-- <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> --}}
      
{{--       <div>
        @foreach ($galeria as $item)
            <img style="width: 80%" src="{{$path}}/storage/{{$item->foto}}"/>
          @endforeach
      </div> --}}

    </main>
    <footer>
      IF4101 - Gerald, Ian, Yansineth, Lissette
    </footer>
  </body>

  <style>

@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 80%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}



  </style>

</html>