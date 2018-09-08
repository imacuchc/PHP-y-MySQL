<?php
/* 	Programa: mysql_up.php
    Desc:     Se conecta con el Servidor MySQL 
*             e imprime las configuraciones.
*/
echo "<html>
	  <head>
		<title>Test MySQL</title></head>
	  <body>";
	  
/*Cambiar por los datos de acceso a tu Servidor MySQL*/
$host="namehost";
$user="nameuser";
$password="password";

$cxn = mysqli_connect($host,$user,$password);
$sql="SHOW STATUS";
$result = mysqli_query($cxn,$sql);
if($result == false) 
{
	echo "<h4>Error: ".mysqli_error($cxn). "</h4>";
}
else 
{
	/*Tabla que muestra los resultados */
	echo "<table border='1'>
		  <tr><th>Variable_name</th>
		  	  <th>Value</th></tr>";
	for($i = 0; $i < mysqli_num_rows($result); $i++) 
	{
		echo "<tr>";
		$row_array = mysqli_fetch_row($result);
		for($j = 0; $j < mysqli_num_fields($result); $j++) 
		{
			echo "<td>".$row_array[$j]."</td>\n";
		}
	}
	echo "</table>";
}
?>
</body></html>