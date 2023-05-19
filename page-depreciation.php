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
        <h1 class="titlePage">Gestor amortizaciones activos fijos</h1>
    
        <div class="project">
            <div class="imageContentProject">
              <img  class="imageProject" src="<?php echo get_template_directory_uri();?>/assets/img/depreciation/equipments_list.png">
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
                "Login" => ["paragraph"=>"Fomulario de login para acceder a la plataforma", "img"=>"depreciation/login.png"],                
                "Gestor máster" => ["paragraph"=>"Vista principal del gestor del activos", "img"=>"depreciation/equipments_list.png"],
                "Baja de activo" => ["paragraph"=>"Formulario para dar de baja a un activo", "img"=>"depreciation/baja2.png"],
                "Ficha del activo" => ["paragraph"=>"Detalle de los atributos del activo", "img"=>"depreciation/ficha_activo.png"],
                "Gestor de cuentas contables" => ["paragraph"=>"Mantenedor, altas y bajas", "img"=>"depreciation/cuentas_contables.png"],
                "Cuenta contable" => ["paragraph"=>"Formulario de alta y edición de cuenta contable", "img"=>"depreciation/crear_cuenta.png"],
                "Amortizacion de un activo" => ["paragraph"=>"Detalle de fechas e importes de amortizaciones", "img"=>"depreciation/ficha_amortizacion.png"],
                "Acordeon amortizaciones" => ["paragraph"=>"Consolidado de amortizaciones mensuales por sede", "img"=>"depreciation/amortizaciones1.png"],
                "Amortización anual" => ["paragraph"=>"Consolidado de amortización por año", "img"=>"depreciation/amortizaciones2.png"]
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

