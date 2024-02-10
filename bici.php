<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



    $id = $_GET['id'];
    $id = filter_var($id , FILTER_VALIDATE_INT);

    

    if(!$id) {
        header('Location: /BikeShop/index.php');
    }

    // Importar la conexion 
    require __DIR__  . '/includes/config/database.php';
    $db = conectarDB();

    //consultar
    $query = "SELECT * FROM bicicletas  WHERE id = {$id}";
    $resultado = mysqli_query($db , $query);

    if(!$resultado->num_rows ) {
        header('Location: /BikeShop/index.php');
    }


    $bicicleta = mysqli_fetch_assoc($resultado);



require 'includes/funciones.php';
incluirTemplate('header');

    ?>


    <main class="contenedor seccion bici">
        <h2 class="bici__heading"> <?php echo $bicicleta['titulo'];   ?> </h2>
        <div class="bici__grid">
            <div class="bici__galeria">
                <a href="../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_1']; ?>" data-lightbox="gallery"> 
              <img  src="../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_1']; ?>" alt="bicicleta">  
                
            </a>
            </div>
            <div class="bici__galeria">
                <a href=" ../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_2']; ?> " data-lightbox="gallery" >
                <img  src="../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_2']; ?>" alt="bicicleta">  
                </a>
                
            </div>

            <div class="bici__galeria">
                <a href=" ../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_3']; ?> " data-lightbox="gallery" >
                <img  src="../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_3']; ?>" alt="bicicleta">   
                </a>
                
            </div>

        </div>
    </main>

    <section class="seccion contenedor informacion">
        <div class="informacion__grid">

        <div class="informacion__modelo">
        <p class="informacion__marca"><span>Marca:</span>  <?php echo $bicicleta['marca'];   ?>   </p>
            <p><span>Talle:</span> <?php echo $bicicleta['talle']; ?> </p>
            <p ><span>Modelo:</span>  <?php echo $bicicleta['modelo'];     ?>          </p>
            <p ><span>Vendedor:</span> <a href=" <?php echo $bicicleta['nombre_vendedor'];   ?>"target="_blank"> <?php echo $bicicleta['usuario_vendedor'];    ?> </a>  </p>
        </div>
     

        
        <ul class="informacion__listado">
            <p >Características</p>
          
        <?php
            // Iteramos sobre caracteristicas  y generamos un salto de linea para los resultados
            $caracteristicas = explode("\n", $bicicleta['caracteristicas']);
            foreach ($caracteristicas as $infoBici) {
                echo '<li>' . htmlspecialchars($infoBici) . '</li>';
            }
        ?>
            
        </ul>
          
    </div> <!--grid-->


        <div class="vendedor"> 


        <div class="vendedor__info">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="30" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                <path d="M12 7v10" />
              </svg>
              <p> <span>Precio:</span> <?php echo $bicicleta['precio'];   ?>  <span>USD$</span>  </p>
        </div>


        
        <div class="vendedor__info">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="36" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
              </svg> 
              <p> <span>Ubicación:</span>   <?php  echo $bicicleta['ubicacion'];   ?>    </p>
        </div>

        

        <div class="vendedor__info"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="30" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
          <p><span>Contacto:</span> <?php echo $bicicleta['telefono']; ?></a></p>
  
        </div>
                 </div> <!---informacion-->

    </section>



    
    <?php 

    

    incluirTemplate('footer');

    ?>