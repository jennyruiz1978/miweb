<?php
/**
 * The template for displaying the helpdesk page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package festivalibiza
 */

get_header();
?>

	<main id="primary" class="site-main">
          

    <section id="content">      
      <div class="containerProjects">        
        <h1 class="titlePage">Gestor de soporte informático</h1>
    
        <div class="project">
            <div class="imageContentProject">
              <img  class="imageProject" src="<?php echo get_template_directory_uri();?>/assets/img/infoM/portada.png">
            </div>
            <div class="detailsSingle">
                <p class="detailProject"><strong>Category:</strong> Desarrollo a medida</p>
                <p class="detailProject"><strong>Description:</strong> Aplicación para gestión de tickets de solicitudes o incidencias de soporte informático: clientes, sucursales, equipos, usuarios, presupuestos, estado del ticket, tiempos y costos/hora técnico, tarifas, dashboard de KPI's, emailing, valoración del cliente, reportes.</p>
                <p class="detailProject"><strong>Year:</strong> 2021</p>
                <p class="detailProject"><strong>Tecnologies:</strong> PHP, Javascript, componentes web nativos, HTML5, Tailwindcss, CSS3, Mysql</p>                
            </div>                
        </div>            
    
        <br>
        
        <h1 class="titlePage">Galería de contenidos</h1>

        <div id="carouselExample" class="carousel slide">          
          <?php
            $carousel = [
                "Login" => ["paragraph"=>"Fomulario de login para acceder a la plataforma", "img"=>"infoM/login.png"],
                "Gestión de incidencias" => ["paragraph"=>"Tabla máster para gestión de solicitudes", "img"=>"infoM/incidencias.png"],
                "Nueva solicitud" => ["paragraph"=>"Formulario registro nueva solicitud", "img"=>"infoM/nuevasolicitud.png"],
                "Seguimiento" => ["paragraph"=>"Visualización, edición y seguimiento de solicitudes", "img"=>"infoM/seguimiento.png"],
                "Dashboard 1" => ["paragraph"=>"Dashboard indicadores del negocio", "img"=>"infoM/dashboard1.png"],
                "Dashboard 2" => ["paragraph"=>"Dashboard series históricas", "img"=>"infoM/dasgboard2.png"],
                "Dashboard 3" => ["paragraph"=>"Dashboard tabas de datos y series históricas", "img"=>"infoM/dashboard3.png"],
                "Clientes" => ["paragraph"=>"Registro de clientes", "img"=>"infoM/clientes.png"],
                "Reasignación de tickets" => ["paragraph"=>"Reasignar una solicitud a otro técnico ", "img"=>"infoM/reasignacion.png"],
            ]; 
            require_once("templates/imagesCarousel.php");
          ?>

          <!--
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/login.png" class="caruselImagen d-block w-100" alt="login">

            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login2</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/incidencias.png" class="d-block w-100" alt="incidencias">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/nuevasolicitud.png" class="d-block w-100" alt="nuevasolicitud">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/seguimiento.png" class="d-block w-100" alt="seguimiento">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/dashboard1.png" class="d-block w-100" alt="dashboard1">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/dasgboard2.png" class="d-block w-100" alt="dasgboard2">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/dashboard3.png" class="d-block w-100" alt="dashboard3">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/clientes.png" class="d-block w-100" alt="clientes">
            </div>
            <div class="carousel-item">
              <div class="carousel-captionOwner">
                <h5>Login</h5>
                <p>Fomulario de login para acceder a la plataforma.</p>
              </div>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/reasignacion.png" class="d-block w-100" alt="reasignacion">
            </div>
          </div>            
          -->

          
          
        </div>
        
      </div>    
    </section>
    

	</main>

<?php

get_footer();
?>

