<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Actualizacion</title>
	 <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<?php 
require_once("conexion.php");

if(!isset($_POST['bt_actu'])){
$documento=$_GET['documento'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
}else{

 $documento=$_POST['documento'];
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];


 $sql="UPDATE aprendices SET nombres=:nom,apellidos=:ape WHERE documento=:doc";

 $resultado=$conexion->prepare($sql);
 $resultado->execute(array(":doc"=>$documento,":nom"=>$nombres,":ape"=>$apellidos));
 header("Location:http://ninoadsi.comlu.com/crud/html/index2.html");


}

?>
     <header>
      
      <div class="container">
        
          <h1 class="col-md-5 text-center">ACTUALIZAR</h1>

      </div>


    </header>
      <div class="container">
       <div class="table-responsive">
       <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <input type="hidden" name="documento" value="<?php echo $documento?>">
        <table class="table  table-bordered table-hover">
        	<tr class="info">
        		
        		<th>DOCUMENTO</th>
        		<th>NOMBRES</th>
        		<th>APELLIDOS</th>
            
            
        		
        		
        	</tr>
        
        	<tr>
        		
        		<th><?php echo $documento ?></th>
        		<th><input type="text" id="nombre" name="nombres" value="<?php echo $nombres ?>"></th>
            <th><input type="text" id="apellido" name="apellidos" value="<?php echo $apellidos ?>"></th>    
           
             
        	</tr>
         </table>


         <div style="margin-left:40%; margin-top:5%;"><button type="submit" name="bt_actu" class="btn btn-success">Actulizar</button></div>
      </div>
     </form>

       <script src="http://code.jquery.com/jquery-lastest.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>