<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allan Rodriguez | Portafolio Profesional</title>
    
    <!-- Enlace al CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    
    <!-- Fuentes e Iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">ALLAN <span>RODRIGUEZ</span></div>
            <div class="nav-links">
                <a href="#habilidades">Habilidades</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
                <button id="theme-toggle" class="theme-btn"><i class="fas fa-moon"></i></button>
                <a href="descargas/Allan_Rodriguez_CV.pdf" download class="btn-cv">
                    <i class="fas fa-download"></i> MI CV
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-left">
            <div class="hero-content">
                <span class="badge">INGENIER&Iacute;A DE SOFTWARE & DISE&Ntilde;O</span>
                <h1>DEVELOPMENT <br><span class="thin">& DESIGN</span></h1>
                <p>Allan David Rodriguez Quintana. Estudiante de 3er Semestre en la Universidad de Guayaquil. Fusionando l&oacute;gica y est&eacute;tica.</p>
                
                <div class="hero-btns">
                    <a href="https://wa.me/593990350244" target="_blank" class="btn btn-cyan">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=allanrodriguez1610@gmail.com" target="_blank" class="btn btn-outline">
                        <i class="fas fa-envelope"></i> Contactar por Email
                    </a>
                    <a href="https://www.linkedin.com/in/allan-david-rodriguez-quintana-11937538a" target="_blank" class="btn btn-outline">
                        <i class="fab fa-linkedin-in"></i> LinkedIn
                    </a>
                </div>
            </div>
        </div>
        
        <div class="hero-right">
            <div class="curva-bg"></div>
            <div class="img-wrapper">
                <img src="img/allan-foto.png" alt="Allan Rodriguez">
            </div>
        </div>
    </header>

    <!-- SECCIÓN HABILIDADES (Hover para revelar porcentajes) -->
    <section id="habilidades" class="skills-section">
        <div class="container">
            <h2 class="title">Mis Habilidades</h2>
            <div class="skills-grid">
                
                <div class="skill-card">
                    <div class="skill-main">
                        <i class="fas fa-code"></i>
                        <h3>Frontend Dev</h3>
                    </div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>HTML/CSS</span> <span>85%</span><div class="bar"><div class="fill" style="width:85%"></div></div></div>
                        <div class="stat-bar"><span>JavaScript</span> <span>60%</span><div class="bar"><div class="fill" style="width:60%"></div></div></div>
                    </div>
                </div>

                <div class="skill-card">
                    <div class="skill-main">
                        <i class="fas fa-terminal"></i>
                        <h3>L&oacute;gica & C++</h3>
                    </div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>Algoritmos</span> <span>75%</span><div class="bar"><div class="fill" style="width:75%"></div></div></div>
                        <div class="stat-bar"><span>POO</span> <span>70%</span><div class="bar"><div class="fill" style="width:70%"></div></div></div>
                    </div>
                </div>

                <div class="skill-card">
                    <div class="skill-main">
                        <i class="fas fa-gamepad"></i>
                        <h3>Videojuegos</h3>
                    </div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>GDevelop</span> <span>90%</span><div class="bar"><div class="fill" style="width:90%"></div></div></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN PROYECTOS DESTACADOS (Iconos + Botones) -->
    <section id="proyectos" class="projects">
        <div class="container">
            <h2 class="title">Proyectos Destacados</h2>
            <div class="grid">
                
                <div class="card card-project">
                    <div class="icon-box"><i class="fas fa-gamepad"></i></div>
                    <span class="p-category">DESARROLLO DE VIDEOJUEGOS</span>
                    <h3>Batalla del Pichincha</h3>
                    <p>Videojuego educativo desarrollado en GDevelop sobre la historia del Ecuador, con l&oacute;gica orientada a eventos.</p>
                    <!-- Link Real del Juego -->
                    <a href="https://gd.games/instant-builds/1ce0e1c1-3f8c-4d4b-a6a1-d0a46759c08f" target="_blank" class="btn-p-action">
                        Jugar Ahora <i class="fas fa-play"></i>
                    </a>
                </div>

                <div class="card card-project">
                    <div class="icon-box"><i class="fas fa-shopping-cart"></i></div>
                    <span class="p-category">DESARROLLO WEB FULLSTACK</span>
                    <h3>E-commerce PHP</h3>
                    <p>Tienda virtual con procesamiento de datos din&aacute;micos y backend robusto en PHP/MySQL bajo XAMPP.</p>
                    <a href="#" class="btn-p-action">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="card card-project">
                    <div class="icon-box"><i class="fas fa-laptop-code"></i></div>
                    <span class="p-category">DISE&Ntilde;O UX/UI</span>
                    <h3>Portafolio Profesional</h3>
                    <p>Dise&ntilde;o de interfaz optimizada para perfiles tecnol&oacute;gicos. Implementaci&oacute;n de Responsive Design.</p>
                    <a href="#" class="btn-p-action">Ver Repositorio <i class="fas fa-code"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN CONTACTO -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <h2 class="title">Contacto</h2>
            <div class="contact-card">
                <form name="contact" method="POST" data-netlify="true" class="contact-form">
                    <div class="input-group"><label>Nombre</label><input type="text" name="name" required></div>
                    <div class="input-group"><label>Correo</label><input type="email" name="email" required></div>
                    <div class="input-group"><label>Mensaje</label><textarea name="message" rows="4" required></textarea></div>
                    <button type="submit" class="btn btn-dark" style="width:100%; border:none; cursor:pointer;">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Allan Rodriguez Quintana · Guayaquil, Ecuador</p>
    </footer>

    <script>
        const themeBtn = document.getElementById('theme-toggle');
        themeBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            themeBtn.innerHTML = document.body.classList.contains('dark-mode') ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        });
    </script>
</body>
</html>