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
      @if ($matricula->foto != '')
      <img src="{{$path}}{{$matricula->foto}}" style="width: 10rem; height: 10rem; margin-left: 220px;">
      @else
      <img src="{{$path}}/imgs/default.jpg" style="width: 10rem; height: 10rem; margin-left: 220px;">
      @endif
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
          <div class="to">Telefono: </div>
          <h2 class="name">{{$matricula->encargado->telefono}}</h2>
          <div class="to">Fecha de nacimiento: </div>
          <h2 class="name">{{$matricula->encargado->fecha_nacimiento}}</h2>
        </div>
      </div>

      <h2 class="name">Pagos realizados:</h2>

      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="unit">METODO DE PAGO</th>
            <th class="desc">TOTAL PAGADO</th>
          </tr>
        </thead>
        <tbody>

          @foreach (Auth::user()->pagos as $item)
              @if ($item->id_matricula == $matricula->id_matricula)
              <tr>
                <td class="no">{{$item->id_pago}}</td>
                <td class="desc">{{$item->metodo_pago}}</td>
                <td>
                  @php
                       $numero = $item->total;
                       $numeroFormateado = number_format($numero, 2);
                       echo  $numeroFormateado;
                   @endphp
                   </td>
              </tr>
              @endif
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL FINAL:</td>
            <td>
              @php
                $numero = 0;

              foreach (Auth::user()->pagos as $item) {
                if ($item->id_matricula == $matricula->id_matricula) {
                    $numero += $item->total;
                }
              }
                $numeroFormateado = number_format($numero, 2);
                   echo $numeroFormateado. ' COLONES';
               @endphp
               </td>
          </tr>
        </tfoot>
      </table>



      {{-- <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> --}}
      

    </main>
    <footer>
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