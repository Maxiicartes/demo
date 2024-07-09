<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Mantenimiento</title>
    <style>
        /* Estilos Generales */
        html {
            min-height: 100%;
            position: relative;
            }
            body {
            margin: 0;
            margin-bottom: 40px;
            font-family: Arial, Helvetica, sans-serif;
            }
            footer {
            background-color: #0070BA;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
            }
            #table {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            #table td, #table th {
              border: 1px solid #ddd;
              padding: 1px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
              padding-top: 8px;
              padding-bottom: 8px;
              text-align: left;
              background-color: #0070BA;
              color: white;
            }

            .container {
            font-size: 0; /* Elimina el espacio entre los elementos en línea */
            }

            .div1, .div2 {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            font-size: 16px; /* Restaura el tamaño de fuente a su valor normal */
            }


            .tableMod {
            border-collapse: collapse;
            text-align: left;
            width: 100%;
            }

            .tdMod {
            padding: 8px;
            }

            .tdMod:first-child {
            text-align: left;
            }

            .tdMod:last-child {
            text-align: left;
            }

            .titulo{
                font-weight: bold;
            }

            .colorMod{
                color: black;
            }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <img src="https://cat.americana.edu.co/polonuevo/administracionvirtual/images/sin_logo.png" alt="logo demo" style="width:253px;height:101px;">
    </div>

    <table class="div-1Header">
        <thead>
            <th class="headerDatosh titulos">Mantenimiento: <span class="titulos">{{$mantenimiento->nombre_producto}}</span></th>
        </thead>
    </table>

    <table>
        <thead>
            <tr>
                <th class="tdMod colorMod titulo">Foto Antes</th>
                <th class="tdMod colorMod titulo">Foto Después</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    @if ($mantenimiento->foto_antes)
                    <img src="https://i.ibb.co/b7vJTkZ/cambiar-la-pasta-t-rmica-1.jpg" alt="" style="max-width: 300px;">
                    @else
                        No hay imagen
                    @endif
                </td>
                <td>
                    @if ($mantenimiento->foto_despues)
                    <img src="https://i.ibb.co/6HbcNRW/pasta-termica.jpg" alt="" style="max-width: 300px;">
                    @else
                        No hay imagen
                    @endif



                </td>
            </tr>
        </tbody>
    </table>
    <div class="container" style="margin-top:50px">

        <div class="div1">
            Datos del Mantenimiento
            <table id="table">
                <tr>
                    <th class="tdMod colorMod titulo">Motivo:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        {{$mantenimiento->motivo}}
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Fecha de última actualización:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        {{$mantenimiento->fecha_ultima_actualizacion}}
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Fecha de mantenimiento:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{$mantenimiento->fecha_mantenimiento}}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Unidad:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{$mantenimiento->unidad}}</span>
                    </td>
                </tr>

            </table>
        </div>

        <div class="div2" style="margin-top:50px;">
            Datos del Técnico
            <table id="table">
                <tr>
                    <th class="tdMod colorMod titulo">Responsable del mantenimiento:</th>
                    <td class="tdMod colorMod" style="text-align: center;">
                        <span>{{$mantenimiento->responsable}}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Nombre del técnico:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        {{$mantenimiento->tecnico_nombre}}
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Rut del técnico:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{ $mantenimiento->tecnico_rut }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Empresa:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{ $mantenimiento->empresa }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Tipo de visita:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{ $mantenimiento->tipo_visita }}</span>
                    </td>
                </tr>
            </table>
        </div>
      </div>

<footer>
    <p>PDF generado en: https://empresa.demo.org/ | Demo  </p>
</footer>
</body>
</html>
