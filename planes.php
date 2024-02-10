        <?php 

    require 'includes/funciones.php';

    incluirTemplate('header');

          ?>


    <main class="contenedor seccion">
        <h2 class="planes__heading">Precio de Publicaciones y Planes</h2>
        <div class="contenedor"> 
            <div class="planes__grid">

                <div class="plan basico">
                    <h3 class="plan__titulo">Plan Básico</h3>
                    <p class="plan__precio">$2500</p>
                    <ul class="plan__listado">
                        
                        <li>Post en Instagram</li>
                        <li>Post en historias de Instagram</li>
                        <li>Post en Pagina Web</li>
                        <li>Post en Facebook</li>
                    </ul>
                    <a class="plan__btn" href="https://www.instagram.com/shopbikearg/" target="_blank" >Consultar</a>
                </div>


                <div class="plan premium">
                    <h3 class="plan__titulo">Plan Premium</h3>
                    <p class="plan__precio">$4500</p>
                    <ul class="plan__listado">
                        <li>Post en Instagram</li>
                        <li>Post en destacadas de Instagram</li>
                        <li>Post destacado en Pagina Web</li>
                        <li>Post diario en historias de instagram</li>
                    </ul>
                    <a class="plan__btn" href="https://www.instagram.com/shopbikearg/" target="_blank"   >Consultar</a>

                </div>


                
                <div class="plan estandar">
                    <h3 class="plan__titulo">Plan Estándar</h3>
                    <p class="plan__precio">$3500</p>
                    <ul class="plan__listado">
                        <li>Post en historias de instagram</li>
                        <li>Post en destacadas de instagram</li>
                        <li>Post en Instagram</li>
                        <li>Post  en pagina web</li>
                       
                    </ul>
                    <a class="plan__btn" href="https://www.instagram.com/shopbikearg/" target="_blank">Consultar</a>
                </div>



            </div> 
    </div>
    </main>

    <section class="contenedor seccion pagos">
        <h2 class="pagos__heading">Si elegiste un plan , aboná como quieras </h2>

        <div class="pagos__grid">

            <div class="pagos__logo">
                 <img src="build/img/logo-mercado-pago.webp" alt="logo mercadpago">
                 <p>Recibimos pagos por Mercadopago, envió de dinero, transferencia, 
                    o pago con Tarjetas de créditos y débito , mediante un link de pago</p>
            </div>

            <div class="pagos__texto">
                <p><span>CBU: 0000003100057001410811</span></p>
                <p><span>ALIAS: santiagomarquezz</span></p>
            </div>

        </div> <!--grid-->

        <p class="pagos__comprobante">Si realizaste un pago directamente en nuestra cuenta , por favor, envíanos el comprobante
             de la transferencia a nuestro email
           <span>bikeshop1975@gmail.com</span> o a nuestros instagram <span>@shopbikearg</span>  indicándonos en el asunto , tu nombre y apellido.</p>

    </section>



    <?php 

 

    incluirTemplate('footer');


    ?>