<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Modelo Vista Controlador III</title>



</head>
<body>

<header>
		<div class="wrapper">
			<div class="logo">
				Master Music
			</div>
			<nav>
				<a href="#">Inicio</a>
				<a href="#">Busqueda</a>
				<a href="configuracion.html">Configuración</a>
				<a href="#">¿Quienes Somos?</a>
			</nav>
		</div>
		<div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Buscar Artista</h1>
                <p>Escribe el nombre de un artista y luego has clic en el botón Buscar:</p>
                <form id="search-form" role="form">
                    <div class="form-group">
                        <input type="text" id="query" value="" class="form-control" placeholder="Escribe el nombre de un Artista..."/>
                    </div>
                    <button type="submit" id="search" class="btn btn-primary" />Buscar</button>
                    <button type="reset" id="search" class="btn btn-alert" />Limpiar</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="resultados">                   
                </div>
            </div>        
        </div>

    </div>

	</header>

<div class="wrap">
		<div class="primaria">
  			
		  <div>
		  	<ul class="playlist">
		  	  <li>
		  	    <div class="track">

				
		  	      
		  	      <?php 
 					foreach ($matrizTracks as $registro) {

 					 echo "<span class='controls' id='playToggle'></span>	";
  					 echo "<span class='title'>". $registro["nombre"] ."</span>" ;
  					 echo "<span class='minus'>-</span>";
		  	         echo "<span id='timeleft'>3:17</span>";
 				}
				?>
		  	      
		  	    </div>
		  	    <audio>
		  	      <source src="audio/mum.mp3" type="audio/mp3" />
		  	      <source src="audio/mum.ogg" type="audio/ogg" />
		  	      Your browser does not support the <code>audio</code> element.
		  	    </audio>
		  	  </li>
		  	</ul>
		  </div>
		  
		</div>
		<div class="secundaria">
			<div class="rep">
				<video class="video" id="medio" autobuffer autoloop loop controls>
					<source src="/media/video.oga">
					<source src="/media/video.m4v">
					<object type="video/ogg" data="/media/video.oga" width="320" height="240">
					<param name="src" value="/media/video.oga">
					<param name="autoplay" value="false">
					<param name="autoStart" value="0">
					</object>
				</video>
			</div>
		</div>
		<div class="terciaria">
			<div class="publicidad">
				<ul>
					<li><img src="images/mm.png" alt="">Master Music corporación 100% Argentina</li>
					<li><img src="images/Master.png" alt=""></li>
					<li><img src="images/spotify.jpg" alt=""></li>
				</ul>
			</div>

		</div>
		<div class="social">
  				<ul>
  					<li><a href="https://www.facebook.com/mastermusicteam/" target="_blank" class="icon-facebook"></a></li>
  					<li><a href="#" target="_blank" class="icon-twitter"></a></li>
  					<li><a href="#" target="_blank" class="icon-instagram"></a></li>
  					<li><a href="#" target="_blank" class="icon-youtube"></a></li>
  					<li><a href="#" target="_blank" class="icon-spotify"></a></li>
  				</ul>
  			</div>

	</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="../js/rep.js"></script>
		<script id="resultados-template" type="text/x-handlebars-template">
        {{#each albums.items}}
            <div style="background-image:url({{images.0.url}})" data-album-id="{{id}}" class="cover">               
            </div>
            <!--
            <br>
            <h6 class="nombre">{{name}}</h6>
            <h6 class="popularidad">{{href}}</h6>
            -->        
        {{/each}}
    </script>
    <script src="../js/buscar.js" type="text/javascript"></script>

</body>
</html>