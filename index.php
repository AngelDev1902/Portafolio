<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Web</title>

    <link rel="stylesheet" href="build/css/app.css">
    <link rel="shortcut icon" href="build/img/minlogoPersonal.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81f690b610.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="enviado" id="enviado">
        <div class="check"><i class="fa-regular fa-circle-check"></i></div>
        <p class="mensajeCorreo"></p>
    </div>

    <header class="header">
        <div class="navegacion">
            <div class="logo">
                <div class="navbar">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <a href="#welcome"><img src="build/img/logoPersonal.svg" alt="" class="logo__img"></a>
            </div>
            <nav class="nav">
                <div class="nav-container">
                    <a href="#welcome" class="nav__link">Inicio</a>
                    <a href="#about-me" class="nav__link">Sobre mí</a>
                    <a href="#services" class="nav__link">Servicios</a>
                    <a href="#projects" class="nav__link">Proyectos</a>
                    <a href="#contact" class="nav__link">Contacto</a>
    
                    <div class="medios">
                        <a href="https://www.linkedin.com/feed/" class="nav__btn btn" target="_blank">Linkedin</a>
                        <a href="https://github.com/AngelTovar19" class="nav__btn btn" target="_blank">GitHub</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">
        <section class="seccionA welcome" id="welcome">
            <div class="welcome__imagen"><img src="build/img/img1.png" alt=""></div>

            <div class="welcome__titulo">
                <h1>¡Hola, Soy <span class="rosa">Luis Angel</span>! <span class="subtitulo">Desarrollador web <span class="rosa">FrontEnd</span></span></h1>
                <a href="#contact" class="contacto-btn btn">Contactame</a>
            </div>
        </section>

        <section class="seccionB about" id="about-me">
                <div class="about-img">
                    <picture>
                        <source srcset='build/img/img2.avif' type='image/avif'>
                        <source srcset='build/img/img2.webp' type='image/webp'>
                        <img loading='lazy' src='build/img/img2.jpg' alt='imagen 1'>
                    </picture>
                </div>

                <div class="about__text">
                    <h2>Sobre Mí</h2>

                    <div class="texto">
                        <p>
                            Soy desarrollador web con habilidades para unir creatividad y código creando experiencias digitales cautivadoras. 
                            Mi enfoque es transformar ideas en sitios web funcionales, utilizando las mejores practicas. Siempre busco
                            actualizarme y aprender algo nuevo día a día. Me gusta trabajar en equipo y ofrecer mi mayor aporte a cada proyecto.
                        </p>
                        <p>
                            Domino principalmente tecnologías web como HTML, CSS, SASS,
                            Gulp, Bootstrap, JavaScript, PHP, MySQL, Git, GitHub, Java entre otras.
                        </p>
                    </div>

                    <div class="tecnologias">
                        <picture>
                            <source srcset="build/img/html.avif" type="image/avif">
                            <source srcset="build/img/html.webp" type="image/webp">
                            <img loading="lazy" src="build/img/html.png" alt="html">
                        </picture>

                        <picture>
                            <source srcset="build/img/css.avif" type="image/avif">
                            <source srcset="build/img/css.webp" type="image/webp">
                            <img loading="lazy" src="build/img/css.png" alt="css">
                        </picture>

                        <picture>
                            <source srcset="build/img/js.avif" type="image/avif">
                            <source srcset="build/img/js.webp" type="image/webp">
                            <img loading="lazy" src="build/img/js.png" alt="javascript">
                        </picture>

                        <picture>
                            <source srcset="build/img/sass.avif" type="image/avif">
                            <source srcset="build/img/sass.webp" type="image/webp">
                            <img loading="lazy" src="build/img/sass.png" alt="sass">
                        </picture>

                        <picture>
                            <source srcset="build/img/bootstrap.avif" type="image/avif">
                            <source srcset="build/img/bootstrap.webp" type="image/webp">
                            <img loading="lazy" src="build/img/bootstrap.png" alt="boostrap">
                        </picture>

                        <picture>
                            <source srcset="build/img/figma.avif" type="image/avif">
                            <source srcset="build/img/figma.webp" type="image/webp">
                            <img loading="lazy" src="build/img/figma.png" alt="figma">
                        </picture>          

                        <picture>
                            <source srcset="build/img/php.avif" type="image/avif">
                            <source srcset="build/img/php.webp" type="image/webp">
                            <img loading="lazy" src="build/img/php.png" alt="php">
                        </picture>

                        <picture>
                            <source srcset="build/img/mysql.avif" type="image/avif">
                            <source srcset="build/img/mysql.webp" type="image/webp">
                            <img loading="lazy" src="build/img/mysql.png" alt="mysql">
                        </picture>
                    </div>

                    <div class="datos">
                        <p><span class="dato">Nombre: </span>Luis Angel Vivar</p>
                        <p><span class="dato">Experiencia: </span> 2 años</p>
                        <p><span class="dato">Edad: </span>19 años</p>
                        <p><span class="dato">Localidad: </span>Ciudad de México, México</p>
                        <p><span class="dato">Pasatiempos: </span>Videojuegos, Leer, Ejercicio, Música</p>
                    </div>

                    <a href="build/documents/CV.pdf" class="cv btn" download>CV</a>
                </div>
        </section>

        <section class="seccionA services" id="services">
            <h2>Servicios</h2>

            <div class="servicios-container">
                <div class="servicio">
                    <h3>Diseño y Maquetación</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <p>
                        Maquetación, diseño y creación de sitios web estaticos,
                        que se adaptan a una gran variedad de dispositivos y tamaños
                    </p>
                </div>
                <div class="servicio">
                    <h3>Aplicaciones Web</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <p>
                        Creación de sitios web dinamicos y aplicaciones web que requieran
                        una conexion a base de datos
                    </p>
                </div>
                <div class="servicio">
                    <h3>Bases de Datos</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <p>
                        Creacion, actualizacion y manejo de bases de datos relacionales
                        con lenguaje sql
                    </p>
                </div>
                <div class="servicio">
                    <h3>E-Commerce</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p>
                        Crecion, actualizacion y manejo de tiendas online con pagina de administrador,
                        pasarela de pagos y demás.
                    </p>
                </div>
                <div class="servicio">
                    <h3>Contenido Multimedia</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-photo-film"></i>
                    </div>
                    <p>
                        Diseño y creacion de material multimedia como logos de marca o empresa,
                        fotografias y videos personalizados
                    </p>
                </div>
                <div class="servicio">
                    <h3>API</h3>
                    <div class="servicio__logo">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <p>
                        Integrar servicios externos en los sitios web, 
                        como sistemas de pago, análisis de datos, 
                        servicios de correo electrónico. 
                    </p>
                </div>
            </div>
        </section>

        <section class="seccionB projects" id="projects">
            <h2>Mis Proyectos</h2>

            <div class="projects-container">
                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                          <source srcset="build/img/proyect2.avif" type="image/avif">
                          <source srcset="build/img/proyect2.webp" type="image/webp">
                          <img loading="lazy" src="build/img/proyect2.jpg" alt="">
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Cafe Esspreso</h3>

                        <p>
                            Landing pages realizada con html, sass, javscript, enfocado en la implementacion de js con el DOM
                        </p>

                        <div class="proyecto__botones">
                            <a href="https://angeldev1902.github.io/Cafeteria/" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="https://github.com/AngelDev1902/Cafeteria" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                            <source srcset='build/img/proyect1.avif' type='image/avif'>
                            <source srcset='build/img/proyect1.webp' type='image/webp'>
                            <img loading='lazy' src='build/img/proyect1.jpg' alt='imagen 1'>
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Viajes México</h3>

                        <p>
                            Landing pages realizada con html, sass, javscript.
                        </p>

                        <div class="proyecto__botones">
                            <a href="https://angeldev1902.github.io/Viajes/" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="https://github.com/AngelDev1902/Viajes" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                            <source srcset='build/img/proyect3.avif' type='image/avif'>
                            <source srcset='build/img/proyect3.webp' type='image/webp'>
                            <img loading='lazy' src='build/img/proyect3.jpg' alt='imagen 1'>
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Matrices</h3>

                        <p>
                            Calculadora para resolución de matrices.
                        </p>

                        <div class="proyecto__botones">
                            <a href="#" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="#" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                            <source srcset='build/img/proyect4.avif' type='image/avif'>
                            <source srcset='build/img/proyect4.webp' type='image/webp'>
                            <img loading='lazy' src='build/img/proyect4.jpg' alt='imagen 1'>
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Viajes México</h3>

                        <p>
                            Proyecto realizado con html, sass, javscript, php y mysql
                        </p>

                        <div class="proyecto__botones">
                            <a href="#" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="#" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                            <source srcset='build/img/proyect5.avif' type='image/avif'>
                            <source srcset='build/img/proyect5.webp' type='image/webp'>
                            <img loading='lazy' src='build/img/proyect5.jpg' alt='imagen 1'>
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Viajes México</h3>

                        <p>
                            Proyecto realizado con html, sass, javscript, php y mysql
                        </p>

                        <div class="proyecto__botones">
                            <a href="#" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="#" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto__img">
                        <picture>
                            <source srcset='build/img/proyect6.avif' type='image/avif'>
                            <source srcset='build/img/proyect6.webp' type='image/webp'>
                            <img loading='lazy' src='build/img/proyect6.jpg' alt='imagen 1'>
                        </picture>
                    </div>
                    <div class="proyecto__info">
                        <h3>Viajes México</h3>

                        <p>
                            Proyecto realizado con html, sass, javscript, php y mysql
                        </p>

                        <div class="proyecto__botones">
                            <a href="#" class="proyecto-btn btn" target="_blank">Visitar</a>
                            <a href="#" class="proyecto-btn btn" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="seccionA contact" id="contact">
            <h2>Contacto</h2>

            <form enctype="multipart/form-data" class="formulario" method="post">
                <p>
                    Si gustas escribirme para algun proyecto, alguna oferta o simplemente
                    deseas contactarme no dudes en enviarme un mensaje. Tambien me puedes encontrar en mis redes sociales.
                </p>

                <div class="campo"> 
                    <label for="nombre">Nombre: </label>
                    <input class="input" type="text" name="nombre" id="nombre" placeholder="Nombre o puesto">
                </div>
                <div class="campo">
                    <label for="correo">Correo: </label>
                    <input class="input" type="email" name="correo" id="correo" placeholder="Correo Electronico">
                </div>
                <div class="campo">
                    <label for="asunto">Asunto: </label>
                    <input class="input" type="text" name="asunto" id="asunto" placeholder="Breve descripcion del asunto">
                </div>
                <div class="campo">
                    <label for="telefono">Telefono: </label>
                    <input class="input" type="tel" name="telefono" id="telefono" placeholder="Telefono de contacto (opcional)">
                </div> 
                <div class="campo mensaje">
                    <label for="mensaje">Mensaje: </label>
                    <textarea class="input" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </div>

                <!-- <div class="campo archivo">
                    <input class="file-input" type="file" name="adjunto" id="file-input">
                    <button class="file" id="file-button"><i class="fa-solid fa-arrow-up-from-bracket"></i>Seleccionar</button>
                    <p class="file-select" id="file-select">Archivo Seleccionado</p>
                </div> -->

                <div class="sub">
                    <p class="load"><i class="fa-solid fa-spinner"></i></p>
                    <input type="submit" value="Enviar" id="enviar" class="contacto-enviar btn">
                </div>

                <div class="datos-error"></div>
            </form>

            <div class="redes">
                <a class="red" href="https://www.instagram.com/angeldev1902/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a class="red" href="https://www.facebook.com/profile.php?id=61551712418257" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a class="red" href="https://twitter.com/angeldev1902" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a class="red" href="https://www.youtube.com/channel/UCDQhxrZ54qlhCuwhBrJU7-Q" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a class="red" href="https://www.tiktok.com/@angeldev1902" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-logo">
            <img src="build/img/minlogoPersonal.svg" alt="mini logo">
        </div>
        <p>
            Todos los derechos reservados - <?php echo date('Y') ?>
        </p>
        <div class="redes">
            <a class="red" href="https://www.instagram.com/angeldev1902/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a class="red" href="https://www.facebook.com/profile.php?id=61551712418257" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a class="red" href="https://twitter.com/angeldev1902" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a class="red" href="https://www.youtube.com/channel/UCDQhxrZ54qlhCuwhBrJU7-Q" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a class="red" href="https://www.tiktok.com/@angeldev1902" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
        </div>
    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>
