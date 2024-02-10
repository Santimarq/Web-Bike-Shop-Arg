
<?php 

require '../../includes/funciones.php';
$autenticado = estaAutenticado();



    if(!$autenticado) {
        header('Location:/BikeShop/index.php');
    }


    
    // Base de datos
    require '../../includes/config/database.php';
    $db =  conectarDB();


   // Validar que sea  un id valido en un url
    $id = $_GET['id'];
    $id = filter_var($id , FILTER_VALIDATE_INT);

    if(!$id) { 
        header('Location: /BikeShop/admin/index.php');
    }

    // Obtener los datos de las bicicletas 
    $consulta = "SELECT * FROM  bicicletas WHERE id = {$id}";
    $resultado = mysqli_query($db , $consulta);
    $bicicleta = mysqli_fetch_assoc($resultado);
    

    
        // echo "<pre>";
        //var_dump($bicicleta);
        //echo "</pre>";
    


    // array con mensajes de errores 
    $errores = [];



    $titulo = $bicicleta['titulo'];
    $precio = $bicicleta['precio'];
    $descripcion = $bicicleta['descripcion_breve'];
    $marca = $bicicleta['marca'];
    $talle = $bicicleta['talle'];
    $modelo = $bicicleta['modelo'];
    $caracteristicas = $bicicleta['caracteristicas'];
    $nombre_vendedor=  $bicicleta['nombre_vendedor'];
    $usuario_vendedor=  $bicicleta['usuario_vendedor'];
    $telefono = $bicicleta['telefono'];
    $ubicacion = $bicicleta['ubicacion'];
    $imagen_1 = $bicicleta['imagen_principal'];
    $imagen_galeria_1 = ['imagen_galeria_1'];
    $imagen_galeria_2 = ['imagen_galeria_2'];
    $imagen_galeria_3 = ['imagen_galeria_3'];
    
  


    // Ejecutar el codigo despues que el usuario envia el formulario
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
            
       
       
        echo "<pre>";
         var_dump($_POST);
         echo "</pre>";

  
          $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
          $precio =  mysqli_real_escape_string($db, $_POST['precio']);
          $descripcion = mysqli_real_escape_string($db ,$_POST['descripcion']);
          $marca =  mysqli_real_escape_string($db , $_POST['marca']);
          $talle = mysqli_real_escape_string($db , $_POST['talle']);
          $modelo =  mysqli_real_escape_string($db , $_POST['modelo']);
          $caracteristicas = mysqli_real_escape_string($db , $_POST['caracteristicas']);
          $nombre_vendedor= mysqli_real_escape_string($db , $_POST['nombre']);
          $usuario_vendedor =  mysqli_real_escape_string($db , $_POST['apellido']);          
          $telefono =   mysqli_real_escape_string($db , $_POST['telefono']);
          $ubicacion =  mysqli_real_escape_string($db , $_POST['ubicacion']);

          // Asignar files hacia una variable 
          $imagen_principal = $_FILES['imagenprincipal'];
          $imagen_galeria1 = $_FILES['imagengaleria1'];
          $imagen_galeria2 = $_FILES['imagengaleria2'];
          $imagen_galeria3 = $_FILES['imagengaleria3'];
          


        // Validar que el formulario no este vacio    


        if($titulo === '') { 
            $errores[] = "Debe añadir un titulo";
        }

        if($precio === '') {
            $errores[] = "Debes añadir un precio";
        }

        if($descripcion === '') {
            $errores[] = "Debes añadir una descripcion";
        }

        if($marca === '') {
            $errores[] = "Debes añadir una marca";
        }

        if($talle === '') {
            $errores[] = "Debes añadir un talle";
        }

        if($modelo === '') {
            $errores[] = "Debes añadir un modelo";
        }

        if($caracteristicas === '') {
            $errores[] = "Debes añadir las caracteristicas";
        }

        if($nombre_vendedor === '') {
            $errores[] = "Debes añadir un nombre de vendedor";
        }

        if($usuario_vendedor === '') {
            $errores[] = "Debes añadir el usuario del vendedor";
        }

        if($telefono === '') {
            $errores[] = "Debes añadir un telefono";
        }

        if($ubicacion === '') {
            $errores[] = "Debes añadir una ubicacion";
        }

        
        
        

          // Validar que las imagenes  no sean muy pesadas 

          $medida = 1000 * 7000;
          
          if($imagen_principal['size'] > $medida ) {
            $errores[] = 'La imagen es muy pesada , elige otra';
          }

          if($imagen_galeria1['size'] > $medida ) {
            $errores[] = 'La imagen es muy pesada , elige otra';
          }

          if($imagen_galeria2['size'] > $medida ) {
            $errores[] = 'La imagen es muy pesada , elige otra';
          }

          if($imagen_galeria3['size'] > $medida ) {
            $errores[] = 'La imagen es muy pesada , elige otra';
          }

          



          // Despues de pasar la validacion insertamos el formulario en la base de datos

          


  // Si el array de errores esta vacio ,o sea no tiene errrores , hacemos la inserccion a la base de datos
        if(empty($errores)) {

                        // Crear carpeta
            $carpetaImagenes = '../../imagenes';

            if (!is_dir($carpetaImagenes)) { 
                mkdir($carpetaImagenes);
            }


            if($imagen_principal['name'] || $imagen_galeria1['name'] || $imagen_galeria2['name'] || $imagen_galeria3['name']) {
                    // Eliminar la imagen previa 
                    
            // Generar nombres únicos antes de eliminar las imágenes antiguas
            $nombre_principal = md5(uniqid(rand(), true)) . ".webp";
            $nombre_galeria1 = md5(uniqid(rand(), true)) . ".webp";
            $nombre_galeria2 = md5(uniqid(rand(), true)) . ".webp";
            $nombre_galeria3 = md5(uniqid(rand(), true)) . ".webp";

            // Remplazar imagen 
            // Eliminar imágenes antiguas
            
            unlink($carpetaImagenes . '/' . $bicicleta['imagen_principal']);
            unlink($carpetaImagenes . '/' . $bicicleta['imagen_galeria_1']);
            unlink($carpetaImagenes . '/' . $bicicleta['imagen_galeria_2']);
            unlink($carpetaImagenes . '/' . $bicicleta['imagen_galeria_3']);

            // Subir nuevas imágenes
            move_uploaded_file($imagen_principal['tmp_name'], $carpetaImagenes . '/' . $nombre_principal);
            move_uploaded_file($imagen_galeria1['tmp_name'], $carpetaImagenes . '/' . $nombre_galeria1);
            move_uploaded_file($imagen_galeria2['tmp_name'], $carpetaImagenes . '/' . $nombre_galeria2);
            move_uploaded_file($imagen_galeria3['tmp_name'], $carpetaImagenes . '/' . $nombre_galeria3);

            } else {
                // Si no se suben nuevas imagenes se mantienen las actuales

                $nombre_principal = $bicicleta['imagen_principal'] ?? '';
                $nombre_galeria1 = $bicicleta['imagen_galeria_1'] ?? '';
                $nombre_galeria2 = $bicicleta['imagen_galeria_2'] ?? '';
                $nombre_galeria3 = $bicicleta['imagen_galeria_3'] ?? '';

            }






            // Actualizar el query

                // Actualizar el query
                $query = "UPDATE bicicletas SET
                titulo = '{$titulo}',
                precio = {$precio},
                imagen_principal = '{$nombre_principal}',
                descripcion_breve = '{$descripcion}',
                marca = '{$marca}',
                talle = '{$talle}',
                modelo = '{$modelo}',
                caracteristicas = '{$caracteristicas}',
                nombre_vendedor = '{$nombre_vendedor}',
                usuario_vendedor = '{$usuario_vendedor}',
                telefono = {$telefono},
                ubicacion = '{$ubicacion}',
                imagen_galeria_1 = '{$nombre_galeria1}',
                imagen_galeria_2 = '{$nombre_galeria2}',
                imagen_galeria_3 = '{$nombre_galeria3}'
                WHERE id = {$id}";
                

                //echo $query;

             
                
          $resultado = mysqli_query($db, $query);
  
      if ($resultado) {
        // Redireccionar al usuario una vez insertado los datos
            header('Location:/BikeShop/admin/index.php?resultado=2');
      } else {
        echo "Error al insertar en la base de datos: " . mysqli_error($db);
      }
  
       } 

        }




    

        incluirTemplate('header');

    ?>


    <main class="contenedor seccion">
            <h1 class="contactanos__heading">Actualizar Bicicleta</h1>
            <a href="/BikeShop/admin/index.php" class="contactanos__btn">Volver</a>
            <!-- formulario --->

            <?php foreach($errores as $error):?>
                <div class="alerta error">
                <?php echo $error ?>
                </div>
                    
            <?php endforeach ;?>


            <form method="post"   class="contactanos  contactanos__formulario"  
            
            enctype="multipart/form-data" >
            <fieldset>
                <legend>Información Sobre la Bicicleta</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" 
                placeholder="Marca de la bicicleta" id="titulo" value="<?php echo $titulo; ?>"  >

                
                <label for="precio">Precio</label>
                <input type="text" name="precio" 
                placeholder="Precio de la bicicleta" id="precio" value="<?php echo $precio; ?>" >

                <label for="imagen">Imagen Principal :</label>
                 <input type="file" id="imagen" accept="image/*" name="imagenprincipal" >

                <img src="../../../BikeShop/imagenes/<?php echo $imagen_1; ?>"  class="img-small" alt="imagen bicicleta">

              

                 <label for="descripcion">Descripcion Breve:</label>   
                <input type="text" name="descripcion" 
                 placeholder="Breve descripción de bicicleta" id="descripcion" 
                 value="<?php echo $descripcion; ?>"  >

                </fieldset>
                
                
                <fieldset>
                <legend>Información Detallada de la bicicleta</legend>

                <label for="marca">Marca:</label>
                <input type="text" name="marca"
                 placeholder="Marca de la bicicleta" id="marca" 
                   value="<?php echo $marca; ?>" >

                
                <label for="talle">Talle:</label>
                <input type="text" name="talle" placeholder="Talle de la bicicleta y rodado" id="talle" 
                 value="<?php echo $talle; ?>">

                
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" placeholder="Modelo de la bicicleta" id="modelo" 
                 value="<?php echo $modelo; ?>">


                <label for="info">Características</label>
                <textarea name="caracteristicas"  id="info"><?php echo $caracteristicas;?>  </textarea>
                 
                <label for="nombre">Nombre Vendedor</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre de Vendedor" 
                value="<?php echo $nombre_vendedor; ?>" >

                <label for="apellido">Usuario  Vendedor</label>
                <input type="text" id="apellido" name="apellido" placeholder="Usuario del Vendedor o apellido" 
                value="<?php echo $usuario_vendedor; ?>"  >  

                           
                <label for="telefono">Teléfono Vendedor</label>
                <input type="tel" name="telefono" placeholder="Teléfono de Vendedor" id="telefono" 
                value="<?php echo $telefono; ?>"     >

                <label for="ubicacion">Ubicacion de  Vendedor</label>
                <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicacion del vendedor" 
                value="<?php echo $ubicacion; ?>"> 

                 <label for="imagen1">Imagen Galería 1:</label>
                 <input type="file" id="imagen1"accept="image/*" name="imagengaleria1">
                 <img src="../../../BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_1']; ?>" class="img-small" alt="imagen galeria 1">


                
                 <label for="imagen2">Imagen Galería 2:</label>
                 <input type="file" id="imagen2" accept="image/*" name="imagengaleria2">
                 <img src="/BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_2'] ?>" class="img-small" alt="imagen galería 1 actual">
              

                 <label for="imagen3">Imagen Galería 3:</label>
                 <input type="file" id="imagen3" accept="image/*" name="imagengaleria3">
                 <img src="/BikeShop/imagenes/<?php echo $bicicleta['imagen_galeria_3'] ?>" class="img-small" alt="imagen galería 1 actual">
                 

               

                    
            </fieldset>

                <input type="submit" value="Actualizar Bici" class="contactanos__btn">

                
        </form>





    </main>


   
   <?php 

    incluirTemplate('footer');

?>