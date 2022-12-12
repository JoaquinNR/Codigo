<!DOCTYPE html>
<head>
     <title>!Tarea Administracion Web¡ </title>

</head>
<body
     bgcolor="orange"
     text="black">
<center>

<?php
class MyClass {
      public static $str = "<h3>Mi nombre es Joaquín Rainao, victor Cid y Joaquin Fernandez";
      public static $JR  = "Asignatura: Administración de servicios Web <br>";


}
echo Myclass::$str."<br>";
echo Myclass::$JR; "<br>";
echo "La fecha de hoy es " .date("d/m/Y") . "<br>";
date_default_timezone_set("America/Santiago");
echo "La hora es: " .date("G:i:s");
?>

</center>
</body>
</html>
   
