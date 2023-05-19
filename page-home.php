<?php
/**
 * The template for displaying the home page
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
        
    <div>
    
      <div class="container-cover div-ofset">
        <div class="cover">
          <section id="text-cover">
            <h1 class="titlesHome">Automatiza tus procesos</h1>
            <p>Agiliza tu trabajo digitalizando tus procesos, eliminando papel, conservando los datos y consultarlos cuando quieras desde cualquier lugar o dispostivo</p>
          </section>
          <section class="image-cover">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/imagen1.jpg" alt="imageInicio">
          </section>
        </div>        
      </div>

      <div class="container-trust container-card-primary">
        <div class="trust card-primary">

          <div class="text-titles text-card-primary">
            <p class="paragraphHome">TODO SIMPLE Y RÁPIDO</p>
            <h1 class="titlesHome">Mantén el control de tu negocio en un click</h1>
          </div>
          
          <div class="container-box-primary">

            <div class="card-trust box-card-primary inventory">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/inventory2.png" alt="processImage">
              <h2>Control de tus procesos</h2>
              <p>Ordena, sincroniza y controla el trabajo en tiempo real</p>
            </div>

            <div class="card-trust box-card-primary kpi">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/kpi.png" alt="kpisImage">
              <h2>Dashboard de KPI's de tu negocio</h2>
              <p>Identifica tus indicadores y haz correcciones a tiempo</p>
            </div>

            <div class="card-trust box-card-primary report">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/report.png" alt="reportingImge">
              <h2>Reporting, alertas e emailing</h2>
              <p>Genera reportes y avisos para la toma de decisiones</p>
            </div>

          </div>
        </div>
      </div>
      
      <div class="container-sectors div-ofset">

        <div class="text-titles text-card-primary">
            <p class="paragraphHome">EXPERIENCIA QUE TÚ NECESITAS</p>
            <h1 class="titlesHome">Soluciones que tu sector y tu negocio requieren</h1>
        </div>    

        <div class="container-box-primary">
          
          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/gestionPersonal.jpg" alt="processImage">
            <h2>Gestión de personal</h2>
            <!--<p>Verifica cómo están haciendo el trabajo en tiempo real</p>-->
          </div>

          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/stock.png" alt="kpisImage">
            <h2>Control de inventarios</h2>
            <!--<p>Identifica tus principales indicadores y haz seguimiento de ellos.</p>-->
          </div>

          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/proyectos.jpg" alt="reportingImge">
            <h2>Gestión de proyectos</h2>
            <!--<p>Genera reportes personalizados, avisos, alertas, para la toma de decisiones</p>-->
          </div>

          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/clinicas.jpg" alt="reportingImge">
            <h2>Clínicas</h2>
            <!--<p>Genera reportes personalizados, avisos, alertas, para la toma de decisiones</p>-->
          </div>

          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/helpdesk.jpg" alt="reportingImge">
            <h2>Soporte informático</h2>
            <!--<p>Genera reportes personalizados, avisos, alertas, para la toma de decisiones</p>-->
          </div>

          <div class="card-sector">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/homeImages/facturacion.jpg" alt="reportingImge">
            <h2>Control de facturación</h2>
            <!--<p>Genera reportes personalizados, avisos, alertas, para la toma de decisiones</p>-->
          </div>

        </div>

      </div>
      

    </div>    


	</main>

<?php
get_footer();
