<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Entrada de datos</title>
    </head>
    <body>
        <table style="border: solid 1px #000">
        <tr>
            <thead>
                <tr>
                    <th style="border: solid 1px #000">NIF</th>
                    <th style="border: solid 1px #000">Apellidos</th>
                    <th style="border: solid 1px #000">Nombre</th>
                    <th style="border: solid 1px #000">Edad</th>
                </tr>
            </thead>
        </tr>
        <tbody>
        <tr>
            <?php
                echo "<td style='border: solid 1px #000'>",$_POST['nif'],"</td>";
                echo "<td style='border: solid 1px #000'>",$_POST['apellidos'],"</td>";
                echo "<td style='border: solid 1px #000'>",$_POST['nombre'],"</td>";
                echo "<td style='border: solid 1px #000'>",$_POST['edad'],"</td>";
            ?>
        </tr>
        </tbody>
        
        </table>

    </body>
</html>