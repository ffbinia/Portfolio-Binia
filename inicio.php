<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portfolio - Federico Binia</title>
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/baa4bcc87f.js" crossorigin="anonymous"></script>

</head>
<body>
    <a name="arriba"></a>

    <div class="wrapper">
        <header>
            <nav class="navbar">
                <div class="brand" >
                    <a href="inicio.php"><h2>F <span>B</span></h2></a>
                </div>
                <ul class="menu">
                    <li><a class="active" href="#arriba">Inicio</a></li>
                    <li><a href="#about">Sobre mí</a></li>
                    <li><a href="#portfolio">Portafolio</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <div class="info-content">
                <h1><span>Federico</span> Binia</h1>
                <p>Hola! Soy Federico, estudiante de la carrera Analista en sistemas y desarrollo de software. Me considero una persona apasionada por el desarrollo, proactiva, responsable, en constante aprendizaje y muy curioso del tema. Quiero sumarme a un equipo de trabajo para potenciar mis habilidades tanto técnicas como humanas, para poder seguir desafiándome todos los días.</p>
                <a download href="CV-FEDERICO-BINIA.pdf">
                    <button class="descargar-cv" download="">Descargar CV</button>
                </a>
            </div>
            <!-- <img src="img/WhatsApp_Image_2022-11-28_at_19.45.02-removebg-preview.png" alt=""> -->
        </main>
    </div>

<div class="about">
    <a name="about"></a>

    <img src="" alt="">

    <div class="about-info">

        <h2>Sobre mí</h2>
        <div class="divider"></div>
        <p>Hola, mi nombre es Federico Binia, soy de la provincia de Córdoba, Argentina, tengo 25 años, soy estudiante de la carrera Analista en sistemas en la Universidad IES Siglo XXI. Actualmente estoy cursando mi 3º año de la carrera en el cual he podido adquirir muchas habilidades, tanto en el desarrollo como tambien en el trabajo en equipo, que he descubierto que me llevo muy bien con ello a lo largo de la carrera. Por otro lado disfruto la posibilidad de brindar algun tipo de ayuda a mis compañeros siempre y cuando este a mi alcance, en caso de no estarlo, tratar de buscarle la solución y resolverlo juntos.
        </p>
        <p>A lo largo de estos años de carrera me he podido dar cuenta de mi pasión por el desarrollo, si bien aún no estoy decidido para que area dirigirme estoy en permanente busqueda de nuevos conocimientos y poniendo en practica todos los dias un poco de los fundamentos de la programación. Es una caracteristica que creo muy importante a la hora del desarrollo que me permite poder encarar cualquier tipo de desafio que se me presente, con la tranquilidad que tengo las herramientas para poder solucionar cualquier situación. Soy participe del trabajo en equipo y de la cultura de trabajo moderna en la cual se trabaja en conjunto ayudando al compañero en lo que se pueda y todos remando hacia el mismo objetivo.
        </p>
        <button class="descargar-cv" id="btn-readmore">Leer más</button>
    </div>
</div>

<div class="portfolio">
    <div class="portfolio-headings">
        <a name="portfolio"></a>

        <h2>Mi Portafolio</h2>
        <div class="divider"></div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card__img">
                <div class="card__title">
                    <h2>Descripción del proyecto</h2>
                    <p>blablalbalblablalba</p>
                </div>
                <div class="card__project-links">
                    <a>
                        <i class="material-symbols-outlined">work_history</i>
                    </a>
                    <a href="">
                        <i class="material-symbols-outlined">code</i>
                    </a>
                </div>
            </div>
            <div class="project-details-content">
                <button class="project-details descargar-cv">
                    <a href="">
                    Detalles del proyecto
                    </a>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <div class="card__title">
                    <h2>Descripción del proyecto</h2>
                    <p>blablalbalblablalba</p>
                </div>
                <div class="card__project-links">
                    <a>
                        <i class="material-symbols-outlined">work_history</i>
                    </a>
                    <a href="">
                        <i class="material-symbols-outlined">code</i>
                    </a>
                </div>
            </div>
            <div class="project-details-content">
                <button class="project-details descargar-cv">
                    <a href="">
                    Detalles del proyecto
                    </a>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <div class="card__title">
                    <h2>Descripción del proyecto</h2>
                    <p>blablalbalblablalba</p>
                </div>
                <div class="card__project-links">
                    <a>
                        <i class="material-symbols-outlined">work_history</i>
                    </a>
                    <a href="">
                        <i class="material-symbols-outlined">code</i>
                    </a>
                </div>
            </div>
            <div class="project-details-content">
                <button class="project-details descargar-cv">
                    <a href="">
                    Detalles del proyecto
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="contact-section">
    <a name="contact"></a>
    <div class="container-headings">
        <h2>Sigamos en contacto</h2>
        <div class="divider"></div>
    </div>
    <div class="container-contact">
        <div class="contact-form">
            <h4>Envíame un mensaje...</h4>

            <form class="form" action="enviar.php" method="POST">
                <input class="txt" type="text" name="nombre" placeholder="Ingrese su nombre...">
                <input class="txt" type="email" name="mail" placeholder="Ingrese su email...">
                <textarea class="txt" name="mensaje" placeholder="Deje su mensaje aquí..."></textarea>
                <button type="submit" name="enviar" class="btn-submit">Enviar mensaje</button>
            </form>
        </div>
    </div>
</div>

<footer class="footer">
<div class="footer-content">
    <h2>Federico Binia</h2>
    <h5>Desarrollo de software</h5>
    <h5>Tel: +54-3513422345</h5>
<div class="social-network">
    <a href="https://www.instagram.com/fedebinia1/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.linkedin.com/in/federico-binia-9891571b8/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="https://github.com/ffbinia" target="_blank"><i class="fa-brands fa-github"></i></a>
</div>
</div>

</footer>
<script src="inicio.js"></script>
</body>
</html>