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
            .div1, .div2 {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            font-size: 16px; /* Restaura el tamaño de fuente a su valor normal */
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

    <div style="display: flex; justify-content: space-between; padding-top: 5%; text-align:center;">
        <div>
            <h3 class="colorMod">{{$software->nombre}}</h3>
        </div>
    </div>


    <div class="container" style="margin-top:50px">

        <div class="div1">
            Datos del Software
            <table id="table">
                <tr>
                    <th class="tdMod colorMod titulo">Versión:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        {{$software->version}}
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Fecha de instalación:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        {{$software->fecha_instalacion}}
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Fecha de la última actualización:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{$software->fecha_ultima_actualizacion}}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Unidad:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{$software->unidad}}</span>
                    </td>
                </tr>
                <tr>
                    <th class="tdMod colorMod titulo">Responsable:</th>
                    <td class="tdMod colorMod " style="text-align: center;">
                        <span>{{$software->responsable}}</span>
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
