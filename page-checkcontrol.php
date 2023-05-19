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
        <h1 class="titlePage">Plataforma Gestión de personal</h1>
    
        <div class="project">
            <div class="imageContentProject">
              <img  class="imageProject" src="<?php echo get_template_directory_uri();?>/assets/img/gestorFichaje/login.png">
            </div>
            <div class="detailsSingle">
                <p class="detailProject"><strong>Category:</strong> Desarrollo a medida</p>
                <p class="detailProject"><strong>Description:</strong> Aplicación para gestión de personal. Control de ingreso y salida. Control de vacaciones, bajas y altas del personal. Reportes consolidados y detallados. Acceso para la subida y descarga de nóminas.</p>
                <p class="detailProject"><strong>Year:</strong> 2020</p>
                <p class="detailProject"><strong>Tecnologies:</strong> PHP, Javascript, jQuery, Mysql, HTML5, Bootstrap, CSS3, FullCalendar, Ajax, DataTables, Json.</p>                
            </div>                
        </div>            
    
        <br>
        
        <h1 class="titlePage">Galería de contenidos</h1>

        <div id="carouselExample" class="carousel slide">
        
       
        <?php
            $carousel = [
                "Login" => ["paragraph"=>"Fomulario de login para acceder a la plataforma", "img"=>"gestorFichaje/login.png"],
                "Entrada/Salida" => ["paragraph"=>"Registro de entrada, salidas y justificación", "img"=>"gestorFichaje/entrada_salida.png"],
                
            ]; 
            require_once("templates/imagesCarousel.php");
          ?>           
          
        </div>
        
      </div>    
    </section>
    

	</main>

<?php

get_footer();
?>

