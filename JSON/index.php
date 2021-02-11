<?php
//vsriable que lee la URL

$url="https://e2147d4ea304.ngrok.io/ServidorRest/webresources/Pelicula";


 //variable para leer  el archivo
$miVar=file_get_contents($url);

//variable para decodificar

$decodjson= json_decode($miVar);


foreach ($decodjson as $p)
{
echo "TITULO: " .$titulo = $p->titulo;
echo "<br>";
echo "GENERO: " .$genero = $p->genero;
echo "<br>";
echo "IDIOMA: " .$idioma = $p->idioma;
echo "<br>";
echo "DURACION: " .$duracion = $p->duracion;
echo "<br>";
echo "CALIFICACION: " .$calificacion = $p->calificacion;
echo "<br>";
echo "RESUMEN: " .$resumen = $p->resumen;
echo "<br>";
echo "ANIO PRODUCCION: " .$anio_produccion = $p->anioProduccion;
echo "<br>";
echo "FORMATO: " .$formato = $p->formato;
echo "<br>";
echo "DIRECTOR: " .$director = $p->director;
echo "<br>";
echo "CLASIFICACION: ".$clasificacion = $p->clasificacion;
echo "<br>";
echo "IMAGEN: ".$imagen = $p->imagen;
echo "<br>";

$con=mysqli_connect("mysql-wendy19.alwaysdata.net","wendy19","arquitectura") or die ("LA BASE DD NO SE ENCUENTRA");
mysqli_set_charset ($con,"utf8");
mysqli_select_db ($con,"wendy19_marvel");

$consulta = "INSERT INTO pelicula (titulo,genero,idioma,duracion,calificacion,resumen,anio_produccion,formato,director,clasificacion,imagen) VALUES
 ('$titulo','$genero','$idioma','$duracion','$calificacion','$resumen','$anio_produccion','$formato','$director','$clasificacion','$imagen');";

$resultado= mysqli_query($con,$consulta);
echo "<br>";
}

if($resultado==true){
    echo "<br>";
    echo "REGISTRO GUARDADO EXITOSAMENTE";
    }
else {
    echo "<br>";
    echo " ERROR no se guardaron los registros";
    }
    

    


?>