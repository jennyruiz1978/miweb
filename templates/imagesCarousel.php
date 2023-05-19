
<?php
   
    $cont = 0;

    $salida = '<div class="carousel-inner">';
    foreach ($carousel as $key => $val) {
        $cont++;
        $active = '';
        if($cont == 1){
            $active = 'active';
        }                    
        $salida.='
            <div class="carousel-item '.$active.'">
              <div class="carousel-captionOwner">
                <h5>'.$key.'</h5>
                <p>'.$val['paragraph'].'</p>
              </div>
              <img src="'.get_template_directory_uri().'/assets/img/'.$val['img'].'" class="caruselImagen d-block w-100" alt="'.$key.'">
            </div>'; 
    }    
    $salida .= '</div>';

    $botones = '
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>';

    $salida .= $botones;

    echo $salida;