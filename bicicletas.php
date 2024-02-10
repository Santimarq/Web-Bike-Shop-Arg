<?php 

require 'includes/funciones.php';

incluirTemplate('header');

    ?>


    <main class="contenedor seccion">
        <section class="bicicletas seccion contenedor">
            <h2 class="bicicletas__heading">Bicicletas en Venta</h2>

            <div class="bicicletas__grid">

            <?php 
                $limiteBicis = 20;
            include 'includes/templates/anuncios.php';
             ?>

            </div> <!---grid-->

            

    </section>
    </main>



    
    <?php 

incluirTemplate('footer');


    ?>