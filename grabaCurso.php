<?php
    if(!file_exists("datos")){
        mkdir("datos");
    }
    $fichero = fopen("datos/cursos.txt","a+");
    $cursoExiste = false;
    while( !feof($fichero) ){
        $registro = fgets($fichero);
        if ( trim($registro) == $_POST['curso']){
            $cursoExiste = true;
            break;
        }
    }
    if(!$cursoExiste){
        fputs($fichero,$_POST['curso']."\n");
        echo "Proceso concluído";
    }
    else{
        echo "Ese curso ya existe";
    }
    fclose($fichero);
?>
