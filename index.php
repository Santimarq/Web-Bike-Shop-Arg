<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BikeShop/build/css/app.css">
    <link rel="icon" href="build/img/logo-bike-shop-definitivo-removebg-preview.png" type="icono"sizes="16x16 32x32 48x48">   
    <title>Bike Shop Arg</title>
</head>
<body>

    <header class="header inicio">
        <div class="contenedor  header__contenido">

            <div class="header__barra">
                <a href="/BikeShop/index.php"> 
                <img class="header__logo" src="build/img/logo-bike-shop-definitivo-removebg-preview.webp" alt="logotipo de Bike Shop Arg">
            </a> 

               

                <nav class="navegacion">
                    <a class="navegacion__link" href="nosotros.php">Nosotros</a>
                    <a class="navegacion__link" href="bicicletas.php">Bicicletas</a>
                    <a class="navegacion__link" href="planes.php">Planes</a>
                    <a class="navegacion__link" href="contacto.php">Contacto</a>

                </nav>


            </div> <!---Barra-->

            <h1 class="header__titulo ml2">Vende tu bici con nosotros  </h1>


        </div>

    </header>


    <main class="contenedor seccion nosotros">
        <h2 class="nosotros__heading"> ¿Estas buscando vender tu bici?</h2>
        <div class="nosotros__grid">
            <div class="nosotros__texto">
                <p>En Bike Shop Arg, ofrecemos espacio publicitario exclusivo para destacar tu bicicleta , sin comisiones por venta
                     solo un precio por publicación. contamos con planes flexibles y precios variados,
                     Tu bicicleta tiene una historia ,  permite que brille en nuestra página web o en instagram. Te acercamos a posibles compradores 
                     al estar conectados con la apasionada comunidad de ciclismo en Argentina.
                    </p>
                    

            </div>

            <div class="nosotros__imagen">
                <img lazy="loading" src="build/img/sold-bike.webp" alt="venta de bici">
            </div>

        </div>
    </main>

    <section class="pasos contenedor seccion">

        <div class="pasos__vendedor">
            <h3 class="pasos__titulo">Si sos Vendedor:</h3>
            <p class="pasos__parrafo">Pasos para ofrecer tu bici en Bike Shop Arg</p>
            <div class="pasos__lista">
                <ul>
                    <li>
                       <span>  Contacta con Nosotros: </span>
            Utiliza nuestro formulario de contacto en la página web,
         o simplemente haz clic en el botón de WhatsApp o envíanos un mensaje directo en Instagram.
                    </li>

                    <li>
                     <span>   Envíanos Detalles de tu Bicicleta:  </span> 
            Después de contactarnos, comparte fotos de tu bicicleta desde diferentes ángulos,
            Proporciona una descripción detallada, destacando características especiales.

                    </li>

                    <li>
                        <span>     Información del Vendedor: </span> 
            Envíanos tus datos de contacto,
            Incluye tus datos de contacto (número de teléfono o correo electrónico) 
            para que los posibles compradores puedan comunicarse contigo directamente.
                    </li>

                </ul>
            </div> <!--lista-->

        </div>


        <div class="pasos__comprador">
            <h3 class="pasos__titulo">Si sos Comprador:</h3>
            <p class="pasos__parrafo">Pasos para  comprar en Bike Shop Arg</p>
            <div class="pasos__lista">
                <ul>
                    <li>
                       <span>   Explora Nuestra Plataforma: </span>

        Navega por nuestra página web o Instagram y descubre las bicicletas disponibles.
        Busca la bicicleta que te gusta y revisa la información proporcionada.
                    </li>

                    <li>
                      <span>   Encuentra la Información del Vendedor: </span> 

    Si encuentras la bicicleta perfecta, encontrarás la información del vendedor directamente en nuestra web
    , podrás obtener información para comunicarte directamente.

                    </li>

                    <li>
                      <span>   Escríbenos para Conectar: </span>
                         Escríbenos directamente para que te conectemos directamente con el vendedor.
                        Utiliza el formulario de contacto en la página web o envíanos un mensaje directo en Instagram.
                    </li>

                </ul>
            </div> <!--lista-->

        </div>

    </section>


    <section class="bicicletas seccion contenedor">
            <h2 class="bicicletas__heading">Bicicletas en Venta</h2>

            <div class="bicicletas__grid">

                <!---anuncio generados dinamicamente con php---->

               <?php 
                    $limiteBicis = 3;
                include 'includes/templates/anuncios.php';

                ?>


            </div> <!---grid-->

            <div class="anuncio__boton"> 
                <a href="bicicletas.php">Ver Todas</a>
            </div>

    </section>



        <section class="contacto seccion ">
            <h2 class="contacto__heading"> Somos tu mejor socio para vender bicicletas de ciclista a ciclista</h2>
            <p class="contacto__texto">Llena el formulario de contacto y a la brevedad nos pondremos en contacto contigo</p>
            <a class="contacto__btn" href="contacto.php">Contáctanos</a>

        </section>



        <section class="seccion planes">
          
            <h3 class="planes__heading">Nuestros Planes </h3>
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
                        <a class="plan__btn" href="planes.php">Ver más</a>
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
                        <a class="plan__btn" href="planes.php">Ver más</a>

                    </div>


                    
                    <div class="plan estandar">
                        <h3 class="plan__titulo">Plan Estándar</h3>
                        <p class="plan__precio">$3500</p>
                        <ul class="plan__listado">
                            <li>Post en historias de instagram</li>
                            <li>Post en destacadas de instagram</li>
                            <li>Post en Instagram</li>
                            <li>Post en pagina web</li>
                           
                        </ul>
                        <a class="plan__btn" href="planes.php">Ver más</a>
                    </div>



                </div> 
        </div>
        </section>







    <footer class="footer  seccion">

        <div class="contenedor footer__contenido">

            <div class="footer__barra">
                <a href="/"> 
                <img class="footer__logo" src="build/img/logo-bike-shop-definitivo-removebg-preview.webp" alt="logotipo de Bike Shop Arg">
            </a> 

                <nav class="footer__navegacion">
                    <a class="footer__link" href="nosotros.php">Nosotros</a>
                    <a class="footer__link" href="bicicletas.php">Bicicletas</a>
                    <a class="footer__link" href="planes.php">Planes</a>
                    <a class="footer__link" href="contacto.php">Contacto</a>

                </nav>


            </div> <!---Barra-->
        </div>

             <p class="footer__copy">Desarrollado por &copy; <a class="footer__copy"
              href="https://www.instagram.com/webbuilderss/" target="_blank">Web Builders</a> 
              
             

    </footer>


        <script src="build/js/bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        
</body>
</html>