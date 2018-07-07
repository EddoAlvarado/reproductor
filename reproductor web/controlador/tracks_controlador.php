<?php

//================= Modelo Vista Controlador III ===============

//2° Ir al Modelo


require_once("modelo/tracks_modelo.php");


$track=new tracks_modelo();

$matrizTracks=$track->get_tracks();



require_once("vista/tracks_view.php");

?>