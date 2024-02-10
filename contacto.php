<?php 

require 'includes/funciones.php';

incluirTemplate('header');

    ?>


    <main class="contenedor seccion contactanos">
        <h2 class="contactanos__heading">Contacto </h2> 
        
        <div class="contactanos__imagen">

        </div>

        <h3 class="contactanos__titulo">Complete el Formulario de Contacto</h3>

        <form action="#" class="contactanos__formulario">
            <fieldset>
                <legend>Tus Datos</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" required>

                
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email" required>
                
                <label for="tel">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="tel" required>

                <label for="mensaje">Mensaje</label>
                <textarea  id="mensaje" required ></textarea>

            </fieldset>


            <fieldset>
                    <legend>¿Como Desea ser Contactado?</legend>

                    <div class="contactanos__flex">
                        <label for="contacar-tel">Teléfono</label>
                        <input name="contacto" type="radio" id="contacar-tel" value="telefono" required>

                        <label for="contacar-email">E-mail</label>
                        <input name="contacto" type="radio" id="contacar-email" value="email" required>


                    </div>
            </fieldset>

                <input type="submit" value="Enviar" class="contactanos__btn  btn_submit">
        </form>

    </main>


    <div class="contacto-redes">
            <div class="contacto-redes__contenido contenedor">

            <div class="contacto-redes__logo">
            <a href="https://www.instagram.com/shopbikearg/"> 
                <img src="../BikeShop/build/img/ig-icon.png" alt="icono instagram">
               <p>@shopbikearg</p>   </a>  
            </div>

            <div class="contacto-redes__logo">
            <a href="https://api.whatsapp.com/send?phone=5493482611758" target="_blank">
                <img src="../BikeShop/build/img/icon-web.png" alt="whatsapp icon">
              <p>Envíanos un  WhatsApp </p>   </a>
            </div>

            </div> <!--- contenido--->

    </div>



    
    <?php 
         

         incluirTemplate('footer');

    ?>