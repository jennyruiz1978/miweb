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
        <h1 class="titlePage">Control de ventas y producción</h1>
    
        <div class="project">
            <div class="imageContentProject">
              <img  class="imageProject" src="<?php echo get_template_directory_uri();?>/assets/img/planning/dashboard1.png">
            </div>
            <div class="detailsSingle">
                <p class="detailProject"><strong>Category:</strong> Desarrollo a medida e integración</p>
                <p class="detailProject"><strong>Description:</strong> Gestión de clientes. Catálogo de productos. Creación y seguimiento de presupuestos y pedidos de plataformas y ascensores. Emailing. Integración con sistemas externo para recogida y entrega de datos. Construcción de API Node.js. Impresión de documentos. Construcción del planning de produción. Estadísticas. Automatización de correos. Dashboard. Alertas.</p>
                <p class="detailProject"><strong>Year:</strong> 2022</p>
                <p class="detailProject"><strong>Tecnologies:</strong> PHP, Javascript, Mysql, SQL server, HTML5, Tailwindcss, CSS3, componentes web nativos, Ajax, Json.</p>
            </div>                
        </div>            
    
        <br>
        
        <h1 class="titlePage">Galería de contenidos</h1>

        <div id="carouselExample" class="carousel slide">
                         
        <?php
            $carousel = [
                "Login" => ["paragraph"=>"Fomulario de login para acceder a la plataforma", "img"=>"planning/login.png"],
                "Productos" => ["paragraph"=>"Creación de productos por categoría y tipos", "img"=>"planning/alta_producto.png"],
                "Catálogo" => ["paragraph"=>"Catálogo de productos con buscadores customizados", "img"=>"planning/catalogo.png"],
                "Clientes" => ["paragraph"=>"Alta de clientes y contactos", "img"=>"planning/alta-cliente.png"],
                "Gestón de presupuestos" => ["paragraph"=>"Creación, edicón, seguimiento de presupuestos", "img"=>"planning/lista_pptos.png"],
                "Presupuesto" => ["paragraph"=>"Versionado, aprobación, rechazo y reactivación", "img"=>"planning/ver_ppto.png"],
                "Pedido" => ["paragraph"=>"Generación automática de pedido", "img"=>"planning/ver_pedido.png"],
                "Dashboard 1" => ["paragraph"=>"KPI gestión de presupuestos y pedidos en tiempo real", "img"=>"planning/dashboard1.png"],
                "Dashboard 2" => ["paragraph"=>"Series históricas de datos", "img"=>"planning/dashboard2.png"]
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

