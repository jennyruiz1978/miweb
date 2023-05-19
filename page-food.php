<?php
/**
 * The template for displaying the food page
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
        <h1 class="titlePage">Planificación de comidas preparadas</h1>
    
        <div class="project">
            <div class="imageContentProject">
              <img  class="imageProject" src="<?php echo get_template_directory_uri();?>/assets/img/training/dashboard1.png">
            </div>
            <div class="detailsSingle">
                <p class="detailProject"><strong>Category:</strong> Desarrollo a medida e integración con XML</p>
                <p class="detailProject"><strong>Description:</strong> Gestión de clientes, profesores, alumnos, catálogo de cursos.</p>
                <p class="detailProject"><strong>Year:</strong> 2021</p>
                <p class="detailProject"><strong>Tecnologies:</strong> PHP, Javascript, JQuery, Mysql, HTML5, CSS3, Bootstrap, Ajax, Json, XML, Summernote, Datatables, FullCalendar, C3.js, D3.js</p>
            </div>                
        </div>            
    
        <br>
        
        <h1 class="titlePage">Galería de contenidos</h1>

        <div id="carouselExample" class="carousel slide">
                         
        <?php
            $carousel = [
                "Clientes" => ["paragraph"=>"Fomulario complejo para toma de datos de los clientes", "img"=>"training/cliente.png"],
                "Profesores" => ["paragraph"=>"Manejo de cartera de profesores", "img"=>"training/profesores.png"],
                "Ficha curso" => ["paragraph"=>"Ficha de proyecto del curso con todos los detalles", "img"=>"training/curso_horarios.png"],                
                "Profesores y alumnos" => ["paragraph"=>"Profesores asignados y alumnos inscritos", "img"=>"training/curso_profesores_alumnos.png"],
                "Catálogo de cursos" => ["paragraph"=>"Catálogo y ficha de detalle", "img"=>"training/cursos2.png"],
                "Certificados" => ["paragraph"=>"Generación automática de diplomas y certificados", "img"=>"training/generar_diploma.png"],
                "Sidebar" => ["paragraph"=>"Desplegado y minimizado", "img"=>"training/sidebar.png"],
                "Generación XML" => ["paragraph"=>"Ficheros que finalmente se importan en aplicaciones externas", "img"=>"training/xmls.png"],
                "Dashboard 1" => ["paragraph"=>"Generación de datos por meses y rangos de fechas", "img"=>"training/Dashboard1.png"],
                "Dashboard 2" => ["paragraph"=>"Gráficas y KPI's para control del negocio", "img"=>"training/Dashboard1.png"]
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

