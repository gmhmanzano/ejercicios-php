<?php
    //Comprobamos si existe el directorio donde vamos a almacenar los ficheros//
    if(!file_exists("matriculas")){
        mkdir("matriculas");
    }
    
    if(file_exists("matriculas/plazas.txt")){
        $fichero = fopen("matriculas/plazas.txt","r");
        $plazas = fgets($fichero);
        fclose($fichero);
    }
    else{
        $plazas=0;
    }
    if ( $plazas < 10 ){
        $fichero2 = fopen("matriculas/alumnos.txt","a+");
        $alumnoEsta = false;
        while( !feof($fichero2)){
            $registro = fgets($fichero2);
            $nif = substr($registro,0,10);
            if($_POST['nif'] == trim($nif)){
                $alumnoEsta=true;
                break;
            }
        }
        if($alumnoEsta){
            echo "El alumno ya estaba matriculado";
        }
        else{
            $registro = str_pad($_POST['nif'],10," ").str_pad($_POST['nombre'],50," ")."\n";
            fputs($fichero2,$registro);
            $plazas++;
            $fichero = fopen("matriculas/plazas.txt","w");
            fputs($fichero,$plazas);
            fclose("$fichero");
            echo "Proceso finalizado";
        }   
    }
    else{
        echo "No hay plazas disponibles";
    }
    fclose($fichero2);
