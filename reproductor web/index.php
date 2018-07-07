<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Master Music</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font.css">
	<script src="js/main.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
 
    <script src="js/menu.js"></script>
 
  <script type="text/javascript">
    $(document).ready(function() {
        $(".playlist").playlist();
    });
  </script>

</head>
<body>


<?php

//1° Ir al controlador

 require_once("controlador/tracks_controlador.php");

?>


</body>
</html>