<?php
/**
 * The template for displaying the portafolio page
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
            <h2 class="titlePage">Portafolio de proyectos</h2>

            <div class="projects">               
                <a class="cardProject" href="<?php echo get_home_url();?>/helpesk">
                    <h3>Gestor de soporte informático</h3>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/infoM/portada.png">
                    <p class="descriptionParagraph">Gestiona tickets de solicitudes de soporte informático</p>
                    <button class="projectBtn">ver proyecto</button>
                </a>

                <a class="cardProject"  href="<?php echo get_home_url();?>/checkcontrol">
                  <h3>Plataforma Gestión de personal</h3>
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/gestorFichaje/login.png">
                  <p class="descriptionParagraph">Vacaciones, bajas, altas, control horario.</p>
                  <button class="projectBtn">ver proyecto</button>
                </a>

                <a class="cardProject"  href="<?php echo get_home_url();?>/planning">
                  <h3>Control de ventas y producción</h3>
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/planning/dashboard1.png">
                  <p class="descriptionParagraph">Creación y seguimiento de presupuestos y pedidos</p>
                  <button class="projectBtn">ver proyecto</button>
                </a>

                <a class="cardProject"  href="<?php echo get_home_url();?>/depreciation">
                  <h3>Gestor amortizaciones activos fijos</h3>
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/depreciation/equipments_list.png">
                  <p class="descriptionParagraph">Alta, baja, traspaso y cálculo de amortización de activos</p>
                  <button class="projectBtn">ver proyecto</button>
                </a>

                <a class="cardProject"  href="<?php echo get_home_url();?>/training">
                  <h3>Plataforma para gestión de cursos de formación</h3>
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/training/generar_diploma.png">
                  <p class="descriptionParagraph">Manejo de clientes, profesores, cursos, alumnos, certificados. </p>
                  <button class="projectBtn">ver proyecto</button>
                </a>

                <a class="cardProject"  href="<?php echo get_home_url();?>/project-detail">
                  <h3>Planificación de comidas preparadas</h3>
                  <img src="<?php echo get_template_directory_uri();?>/assets/imagescarousel/carousel3.jpg">
                  <p class="descriptionParagraph">Integración con WooCommerce. Control picking.</p>
                  <button class="projectBtn">ver proyecto</button>
                </a>

            </div>

        </div>
      </section>

	</main>

<?php
get_footer();
