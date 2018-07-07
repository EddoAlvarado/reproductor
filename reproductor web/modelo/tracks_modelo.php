<?php

//============== Modelo Vista Controlador II ==========================

class tracks_modelo {
	
   private $db;
   private $tracks;


	public function __construct()
	{
		require_once("modelo/conexion.php");

		$this->db=Conectar::conexion();

		$this->tracks=array();

	}

  public function get_tracks(){

   $consulta=$this->db->query("SELECT * FROM tracks");

   while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

   	$this->tracks[]=$filas;


   }

   return $this->tracks;
  }

}




?>