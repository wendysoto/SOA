<?php


$con=mysqli_connect("mysql-wendy19.alwaysdata.net","wendy19","arquitectura") or die ("LA BASE DD NO SE ENCUENTRA");
mysqli_set_charset ($con,"utf8");
mysqli_select_db ($con,"wendy19_marvel");


 //LEER DATOS DESDE LA BDD MYSQL

 echo "<br>";
 echo "<br>";
 echo "DATOS DESDE LA BASE MYSQL: ";
 $sql= "select *from pelicula";
 
 $rs=mysqli_query($con,$sql);

 while ($row1 =mysqli_fetch_object($rs)){

     $datos[]=$row1;


 }

 //ARRAY ASOCIATIVO
 foreach($datos as $dat){
    echo "<br>";
    echo "TITULO: " .$dat->titulo;
echo "<br>";
  
     

 }
 mysqli_close($con);


?>