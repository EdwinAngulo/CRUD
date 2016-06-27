 <?php 

try {

$conexion= new PDO('mysql:host=sql5.freemysqlhosting.net; dbname=sql5124996','sql5124996','c2d2UyxQzL');
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$conexion->exec("SET CHARACTER SET utf8");

	
} catch (Exception $e) {
  
  die('Error: '.$e->GetMessage());
  echo "<br>";
  echo "Linea del error: ". $e->getLine();
	
} 


 ?>