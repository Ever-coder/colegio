<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colegio La Asunción - SV</title>
	<meta name="description" content="corporacion la asuncion">
	<link rel="shortcut icon" href="images/logo.png" />

	<!-- boostrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Font -->
	<link rel="stylesheet" href="css/font/font-awesome.min.css">

	<!-- redes sociales navbar -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

	<!-- NavBar -->
	<link rel="stylesheet" href="css/paginas/navbar.css">

	<!-- Titulos -->
	<link rel="stylesheet" href="css/paginas/Unoticias.css">

	<!-- Oferta -->
	<link rel="stylesheet" href="css/paginas/oferta.css">

	<!-- Footer -->
	<link rel="stylesheet" href="css/paginas/footer.css">

	<!-- animacion formulario-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


</head>
<body id="body-quienes">
	

	<!-- Navbar -->
	<nav class="navbar sticky-top navbar-light navbar-expand-lg border-bottom border-dark" style="background-color: #9f86c0;">

		    <a class="navbar-brand nav-image" href="index.html">
		      <img src="images/logo.png" alt="La Asunción">
		    </a>

		    <button class="navbar-toggler navbar-toggler-right toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse justify-content-end bar" id="navbarNavDropdown">
		      <ul class="navbar-nav items">
		        <li class="nav-item p">
		          <a class="nav-link a" aria-current="page" href="index.html">inicio</a>
		        </li>
		        <li class="nav-item p">
		          <a class="nav-link" href="quienes.html">quiénes somos</a>
		        </li>
		        <li class="nav-item dropdown p">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            sitios de interés
		          </a>
		          <ul class="dropdown-menu submenu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item a" href="sitios.html">Plataforma y Correo</a></li>
		            <li><a class="dropdown-item a" href="noticias.html">Noticias</a></li>
		            <li><a class="dropdown-item a" href="galeria.html">Galería</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item a" href="https://sites.google.com/view/biblioteca-monseor-romero/inicio" target="_blank">Biblioteca Online</a></li>
		          </ul>
		        </li>
		        <li class="nav-item dropdown p">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            nuevo ingreso
		          </a>
		          <ul class="dropdown-menu submenu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item a" href="oferta.php">Oferta Académica</a></li>
		            <li><a class="dropdown-item a" href="solicitud_info.php">Admisión 2022</a></li>
		          </ul>
		        </li>
		        <li class="nav-item p">
		          <a class="nav-link" href="contactenos.html">contáctenos</a>
		        </li>
		        <li><a href="https://www.facebook.com/colegiolaasuncionsv" target="_blank"><i aria-hidden='true' class='fa fa-facebook redes'/></i></a></li>
		        <li><a href="https://www.instagram.com/laasuncionsv/" target="_blank"><i aria-hidden='true' class='fa fa-instagram redes'/></i></a></li>
                <li><a href="https://twitter.com/laasuncionsv?lang=es" target="_blank"><i aria-hidden='true' class='fa fa-twitter redes'/></i></a></li>
                
		      </ul>

		    </div>			    
	</nav>

	<!-- Nuevo Ingreso -->
	<div class="container">
		<div class="row">
			<center>
				<div class="col-md-6">
					<div class="tituloO" style="background-image: url(images/fondouno.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
			      <hr class="hrN">
			      	<i class="fa fa-list-alt iconO" aria-hidden="true"></i>
				      <h2>OFERTA ACADÉMICA<BR>NUEVO INGRESO<BR>AÑO 2022</h2>
			      <hr class="hrN">
			     </div>
			  </div>
	  	</center>
	  </div>
	</div>

	<!-- Button trigger modal -->
	<center><button type="button" class="btn btn-warning ab animate__animated animate__pulse animate__slow animate__infinite  infinite" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
	  <b>INICIAR PROCESO DE ADMISIÓN</b>
	</button></center>

	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header FondoFT">
	        <h5 class="modal-title" id="staticBackdropLabel">Solicitud de Información para Nuevo Ingreso 2022</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body FondoF">
	        <form method="POST" name="form-work" action="logica/guardar.php">
                    
                          <fieldset>
                            <?php
					                    date_default_timezone_set('America/El_Salvador');
					                    $fecha_actual=date("Y-m-d");
					                  ?>
                  					<input type="hidden" name="fecha" value="<?= $fecha_actual?>">

                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="nomeR">Nombre Responsable</label>
                                    <input name="nombreR" class="form-control FondoFI" placeholder="Ingresar Nombre..." type="text" required="required">
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="nomeE">Nombre Estudiante</label>
                                    <input name="nombreE" class="form-control FondoFI" placeholder="Ingresar Nombre..." type="text" required="required">
                                  </div>
                              </div>    
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="telefono">Telefono/Celular</label>
                                    <input name="tel" class="form-control FondoFI" placeholder="Ingresar Número" type="text" required="required">
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="email">Correo Electrónico</label>
                                    <input name="email" class="form-control FondoFI" placeholder="ejemplo@gmail.com" type="email" required="required">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="grado">Grado de Interés</label>
                                    <select name="grado" class="form-control FondoFI">
                                      <option>Primer Grado</option>
                                      <option>Segundo Grado</option>
                                      <option>Tercer Grado</option>
                                      <option>Cuarto Grado</option>
                                      <option>Quinto Grado</option>
                                      <option>Sexto Grado</option>
                                      <option>Séptimo Grado</option>
                                      <option>Octavo Grado</option>
                                      <option>Noveno Grado</option>
                                      <option>Primer Año Bachillerato</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="sector">Sector Trabajo</label>
                                    <select name="sector" class="form-control FondoFI">
                                      <option>Privado</option>
                                      <option>Público</option>
                                      <option>Informal</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12 col-sm-6 input">
                                    <center><label class="control-label" for="message">Ampliación de Información</label></center>
                                    <textarea class="FondoFI" style="width:100%;" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Solicitud de Información..."></textarea>
                                  </div>     
                              </div>
                              <div class="modal-footer">
												        <button type="button" class="btn FondoFBC" data-bs-dismiss="modal">Cerrar</button>
												        <button type="submit" class="btn FondoFBE">Enviar</button>
												      </div>
                          </fieldset> 
                        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>


	<!-- Oferta -->
	<center>
		<div class="container">
			<div class="card mb-3" style="max-width: 800px;">
			  <div class="row g-0">
			    <div class="col-md-6">
			      <img src="images/oferta/1ciclo.jpg" class="card-img-top imgOuno" alt="...">
			    </div>
			    <div class="col-md-6" style="background-color: rgba(238, 203, 227, 0.74); border-right-style: double; border-bottom-style: double;">
			      <div class="card-body">
			        <h5 class="card-title text">PRIMER CICLO</h5>
			        <p class="card-text" align="justify">El Primer Ciclo es la primera etapa de la Enseñanza Básica. Contempla los grados de 1º a 3º. En este nivel los alumnos inician con el desarrollo de destrezas básicas para la expresión oral, la lectura, la escritura y el cálculo aritmético, así como el desarrollo de la independencia y autonomía.</p>
			        
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</center>

	<center>
		<div class="container">
			<div class="card mb-3" style="max-width: 800px;">
				<div class="row g-0">
			    <div class="col-md-6">
			      <img src="images/oferta/2ciclo.jpg" class="card-img-top imgOuno" alt="...">
			    </div>
					<div class="col-md-6" style="background-color: rgba(207, 231, 173, 0.74); border-right-style: double; border-bottom-style: double;">
			      <div class="card-body">
			        <h5 class="card-title text">SEGUNDO CICLO</h5>
			        <p class="card-text" align="justify">El 2º ciclo comprende de 4o a 6o grado. Es una etapa en la cual los estudiantes desarrollan las habilidades de independencia, sociabilidad, resolución de problemas, trabajo en equipo, entre otras. Además, los niños/as reciben clases de formación en la fe, inglés, deportes, música, artes manuales, en jornada de 6:50 a.m. a 12:30 p.m.</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</center>

	<center>
		<div class="container">
			<div class="card mb-3" style="max-width: 800px;">
			  <div class="row g-0">
			    <div class="col-md-6">
			      <img src="images/oferta/3ciclo.jpg" class="card-img-top imgOuno" alt="...">
			    </div>
			    <div class="col-md-6" style="background-color: rgba(255, 231, 173, 0.74); border-right-style: double; border-bottom-style: double;">
			      <div class="card-body">
			        <h5 class="card-title text">TERCER CICLO</h5>
			        <p class="card-text" align="justify">Comprende los últimos tres grados de la educación básica (Séptimo, Octavo y Noveno) en jornada de 6:50 a.m. a 12:30 p.m. Es un nivel en el cual los/ las estudiantes viven un momento de transición en la vida, que marca el paso de la niñez a la edad adulta.</p>		        
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</center>

	<center>
		<div class="container">
			<div class="card mb-3" style="max-width: 800px;">
				<div class="row g-0">
			    <div class="col-md-6">
			      <img src="images/oferta/bachillerato.jpg" class="card-img-top imgOuno" alt="...">
			    </div>
					<div class="col-md-6" style="background-color: rgba(112, 175, 225, 0.74); border-right-style: double; border-bottom-style: double;">
			      <div class="card-body">
			        <h5 class="card-title text">BACHILLERATO</h5>
			        <p class="card-text" align="justify">Bachillerato es un nivel en el cual los/las estudiantes ya han establecido o están en el proceso de establecer un proyecto de vida más concreto que los/las lleve a su elección profesional.</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</center>

	<!-- Educación Integral -->

	<div class="container">
		<div class="row justify-content-center rowbox">
			<div class="col-md-4 rowbox">
				<div class="card text-white mb-3 h-100" style="max-width: 18rem;">
				  <div class="card-header  colorEduT"><b>EDUCACIÓN INTEGRAL</b></div>
				  <div class="card-body colorEdu" style="background-image: url(images/fondoNoticia.jpg); background-repeat: no-repeat;background-size: cover;">
				    <h5 class="card-title">Formación en la fe, inglés, deportes, música, artes manuales</h5>
				    <p class="card-text">PRIMER CICLO Y SEGUNDO CICLO</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 rowbox">
				<div class="card text-white mb-3 h-100" style="max-width: 18rem;">
			  	<div class="card-header colorEduT"><b>EDUCACIÓN INTEGRAL</b></div>
				  <div class="card-body colorEdu" style="background-image: url(images/fondoNoticia.jpg); background-repeat: no-repeat;background-size: cover;">
				    <h5 class="card-title">Educación física, formación en la fe y computación.</h5>
				    <p class="card-text">TERCER CICLO Y BACHILLERATO</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 rowbox">
				<div class="card text-white mb-3 h-100" style="max-width: 18rem;">
			  	<div class="card-header  colorEduT"><b>HORARIO</b></div>
				  <div class="card-body colorEdu" style="background-image: url(images/fondoNoticia.jpg); background-repeat: no-repeat;background-size: cover;">
				    <h5 class="card-title">6:50 a.m. a 12:30 p.m.</h5>
				    <p class="card-text">PRIMER, SEGUNDO Y TERCER CICLO</p>
				    <h5 class="card-title">6:50 a.m. a 2:30 p.m.</h5>
				    <p class="card-text">BACHILLERATO</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
  

	<!-- WhatsApp Chat -->
  <a href="https://api.whatsapp.com/send?phone=50376025460&text=Hola!&nbsp;Me&nbsp;podrían&nbsp;brindar&nbsp;información?" class="appWhatsapp" target="_blank">
    <img src="images/Whatsapp.png" alt="Whatsapp">
  </a>

  <!-- Messenger plugin del chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin del chat code --
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "640260806045532");
      chatbox.setAttribute("attribution", "page_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

	<!-- Footer -->
	<div class="footer-dark">
	    <footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-md-4 item">
	                    <h3>Últimas Noticias</h3><hr class="hr">
	                    <ul>
			              <li class="u"><a href="#"><p align="left">Todo el personal recibio la segunda dosis de la vacuna contra el covid-19</p></a></li>
			              <li class="u"><a href="#"><p align="left">Ya casi Empiezan las fechas de inscripcción</p></a></li>
			              <li class="u"><a href="#"><p align="left">Tutoriales de Canvas</p></a></li>
			              <li class="u"><a href="#"><p align="left">Celebrando 182 años</p></a></li>
			            </ul>
	                </div>
	                <div class="col-md-4 item text">
	                    <h3>Acerca de Nosotros</h3><hr class="hr">
	                    <p align="justify">Somos una Institución Educativa Católica miembro de la Red de Colegios de las Religiosas de La Asunción.<br>

							Formamos integralmente niños, niñas y jóvenes con sólida conciencia humana, espiritual e intelectual, a través del desarrollo de competencias para la vida para hacer que nuestros estudiantes y graduados se comprometan e incidan en la transformación de la sociedad</p>
	                </div>
	                <div class="col item social"> <h3>Siguenos en Redes Sociales</h3><center><hr class="hr"></center>
	                	<a href="https://www.facebook.com/colegiolaasuncionsv" target="_blank"><i class="fa fa-facebook redesf"></i></a>
	                	<a href="https://www.instagram.com/laasuncionsv/" target="_blank"><i class="fa fa-instagram redesf"></i></a>
	                	<a href="https://twitter.com/laasuncionsv?lang=es" target="_blank"><i class="fa fa-twitter redesf"></i></a><br><br>
	                	<h3>Dirección:</h3><p>1a Calle Poniente, 1148, San Salvador</p></div>
	            </div>
	            
	            
	            
	        </div>
	    </footer>
	</div>

	<!-- SSL -->
	<div class="cert d-none d-md-block">
				<center>
	            	<p class="copyright">© Corporación La Asunción 2021</p>
	            	<span id="siteseal"><script async type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=hhTdukaSiaoA1QEZfbR8whb3d4AvOkJzgNb5v4oN0z4thwvhJ1BgRRNYgdxV"></script></span>
	      </center>
	</div>

	<!-- Script de Navbar estatico y cambio de color -->
	<style type="text/css">
		.color{
			background-color: rgba(181, 160, 213, 0.93) !important;
		}
	</style>
	<script type="text/javascript">
		var nav = document.querySelector('nav');

			window.addEventListener('scroll', function (){

				if (window.pageYOffset > 100) {
					nav.classList.add('color','shadow');
				}else{
					nav.classList.remove('color','shadow');
				}
		});
		var button = document.querySelector('button');

			window.addEventListener('scroll', function (){

				if (window.pageYOffset > 100) {
					button.classList.add('color','shadow');
				}else{
					button.classList.remove('color','shadow');
				}
		});
	</script>

	<!-- jQuery -->	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	
	
</body>
</html>