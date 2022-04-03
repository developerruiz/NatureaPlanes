<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/portada-link.jpg" />

    <title>NatureaKits</title>
    <meta property="og:url" content="https://natureakits.com/" />
    <meta property="og:description" content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

    <meta name="description"
        content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

    <meta name="keywords" content="Naturea kits bienestar natural aceites esenciales salud tranquilidad  crecimiento negocio emprendimiento vida sana trnaquilidad oportunidades " />

    <meta property="og:site_name" content="https://natureakits.com/" />
    <meta property="fb:admins" content="ID de Facebook " />
    <meta property="article:published_time" content="2022-02-03T11:25:00+01:00" />
    <meta property="article:modified_time" content="2022-02-03T11:25:47+01:00" />
    <meta property="og:type" content="website" />
    <meta name="author" content="Ivan Ruiz Rodriguez || Front-end Developer" />
    <meta name="revised" content="03/02/2022" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Naturea Kits">
    <meta itemprop="description"
        content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana.">


    <meta itemprop="image" content="img/portada-link.jpg">

    <!-- Nos sirve para guardar una cookie. Los datos guardados son clave/valor -->
    <meta http-equiv="cookie" content="clave=valor; expires=Wednesday, 03-02-22 11:25:59 GMT;" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/formulario.css">
    
    <!-- TODO: IMAGEN DE PORTADA -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- FONTAWENSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- GOOGLE ANALITYCS -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-79CRZNBZ5W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-79CRZNBZ5W');
    </script>

</head>

<body>
    <main>

        <div class="container">
            <div class="row">
                <div class="card p-4">
                    <div class="col-lg-12 text-center my-5">
                        <img src="img/logo-naturea.png" alt="" width="140px">
                    </div>
                    <form action="registrar.php" class="formulario" id="formulario" method="POST">

                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="nombre" class="formulario__label">Nombre</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre"
                                    placeholder="Nombre completo" require>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: Correo Electronico -->
                        <div class="formulario__grupo" id="grupo__correo">
                            <label for="correo" class="formulario__label">Correo Electrónico</label>
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo"
                                    placeholder="correo@correo.com">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos,
                                guiones y
                                guion bajo.</p>
                        </div>

                        <!-- Grupo: Teléfono -->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <label for="telefono" class="formulario__label">Teléfono</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono"
                                    placeholder="5591234567">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son
                                14 dígitos.
                            </p>
                        </div>

                        <!-- Grupo: Teléfono -->
                        <div class="formulario__grupo" id="grupo__fecha">
                            <label for="fecha-nacimiento" class="formulario__label">Fecha de nacimiento</label>
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" name="fecha" id="fecha-nacimiento"
                                    placeholder="dd/MM/aaaa">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son
                                14 dígitos.
                            </p>
                        </div>

                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo" id="grupo__ciudad">
                            <label for="ciudad" class="formulario__label">Ciudad</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="ciudad" id="ciudad"
                                    placeholder="ciudad">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La ciudad tiene que ser de 4 a 16 carácteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: Estado-->
                        <div class="formulario__grupo">
                            <label for="estado" class="formulario__label">Estado</label>
                            <select name="estado" id="estado" class="formulario__input" require="true">
                                <?php 
                                include ('conexion.php');
                                    $estado=" SELECT * FROM tb_estado";
                                    $consulta_estado = mysqli_query($conexion,$estado) or die(mysql_error($conexion));
                                ?>
                                <?php foreach ($consulta_estado as $opciones): ?>

                                <option value="<?php echo $opciones['estado']?>"><?php echo $opciones['estado']?>
                                </option>

                                <?php endforeach ?>

                            </select>
                        </div>

                        <!-- Grupo: Municipio -->
                        <div class="formulario__grupo" id="grupo__municipio">
                            <label for="municipio" class="formulario__label">Municipio</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="municipio" id="municipio"
                                    placeholder="municipio">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El municipio tiene que ser de 4 a 16 carácteres y solo
                                puede contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: calle -->
                        <div class="formulario__grupo" id="grupo__calle">
                            <label for="calle" class="formulario__label">Calle</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="calle" id="calle"
                                    placeholder="calle">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La calle tiene que ser de 4 a 16 carácteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: calle -->
                        <div class="formulario__grupo" id="grupo__codigo_postal">
                            <label for="codigo_postal" class="formulario__label">Código postal</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="codigo_postal" id="codigo_postal"
                                    placeholder="codigo postal">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El codigo tiene que ser de 5 carácteres y solo puede
                                contener
                                numeros</p>
                        </div>

                        <!-- Grupo list -->
                        <div class="formulario__grupo">
                            <label for="solicitud" class="formulario__label">Solicita</label>
                            <select name="solicitud" id="solicitud" class="formulario__input" require="true">
                                <?php 
                                include ('conexion.php'); 
                                    $solicitud=" SELECT * FROM tb_solicitud ORDER BY solicitud ASC" ;
                                    $consulta_solicitud = mysqli_query($conexion,$solicitud) or die(mysql_error($conexion));
                                ?>
                                <?php foreach ($consulta_solicitud as $opciones): ?>

                                <option value="<?php echo $opciones['solicitud']?>"><?php echo $opciones['solicitud']?>
                                </option> 

                                <?php endforeach ?>

                            </select>
                        </div>

                        <div class="formulario__grupo">
                            <label for="medios" class="formulario__label">Cómo te enteraste?</label>
                            <select id="medios" name="medios" onchange="ShowSelected();" class="formulario__input">

                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="recomendación">Recomendación</option>
                                <option value="anuncio">Anuncio</option>
                                <option value="pasaba por ahi">Pasaba por ahí</option>
                                <option value="otro">Otro</option>

                            </select>
                        </div>

                        <!-- Grupo: calle -->
                        <div class="formulario__grupo d-none" id="group__otro">
                            <label for="otro" class="formulario__label">Otro</label>

                            <input type="text" class="formulario__input" name="otro" id="otro" disabled
                                placeholder="otro medio">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>

                            <!-- <p class="formulario__input-error">El codigo tiene que ser de 5 carácteres y solo puede
                                contener
                                numeros</p> -->
                        </div>


                        <!-- Grupo: Terminos y Condiciones -->
                        <div class="formulario__grupo" id="grupo__terminos">
                            <label class="formulario__label">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                                Acepto los Términos y Condiciones
                            </label>
                            <a href="#">Ver términos y condiciones</a>
                        </div>

                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                                correctamente.</p>
                        </div>

                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <button type="submit" class=" formulario__btn">Enviar</button>
                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado
                                exitosamente!</p>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>