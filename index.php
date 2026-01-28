<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allan Rodriguez | Portafolio Profesional</title>
    
    <!-- CSS con refresco de cache -->
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
                <button id="theme-toggle" class="theme-btn"><i class="fas fa-moon"></i></button>
                <a href="descargas/Allan_Rodriguez_CV.pdf" download class="btn-cv">
                    <i class="fas fa-download"></i> MI CV
                </a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-left">
            <div class="hero-content">
                <span class="badge">INGENIERÍA DE SOFTWARE & DISEÑO</span>
                <h1>DEVELOPMENT <br><span class="thin">& DESIGN</span></h1>
                <p>Allan David Rodriguez Quintana. Estudiante de 3er Semestre en la Universidad de Guayaquil. Creando soluciones tecnológicas con enfoque en UX/UI profesional.</p>
                <div class="hero-btns">
                    <a href="https://wa.me/593990350244" target="_blank" class="btn btn-cyan"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="https://www.linkedin.com/in/allan-david-rodriguez-quintana-11937538a" target="_blank" class="btn btn-outline"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
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

    <section id="habilidades" class="skills-section">
        <div class="container-wide">
            <span class="label-top">LO QUE HAGO</span>
            <h2 class="title">Mis Habilidades</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-main"><i class="fas fa-code"></i><h3>Frontend Dev</h3></div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>HTML5/CSS3</span> <span>70%</span><div class="bar"><div class="fill" style="width:70%"></div></div></div>
                        <div class="stat-bar"><span>JavaScript</span> <span>50%</span><div class="bar"><div class="fill" style="width:50%"></div></div></div>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-main"><i class="fas fa-coffee"></i><h3>Java & Backend</h3></div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>Java SE / POO</span> <span>65%</span><div class="bar"><div class="fill" style="width:65%"></div></div></div>
                        <div class="stat-bar"><span>Patrón MVC</span> <span>40%</span><div class="bar"><div class="fill" style="width:40%"></div></div></div>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-main"><i class="fas fa-gamepad"></i><h3>Videojuegos</h3></div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>Lógica Eventos</span> <span>80%</span><div class="bar"><div class="fill" style="width:80%"></div></div></div>
                        <div class="stat-bar"><span>Física 2D</span> <span>45%</span><div class="bar"><div class="fill" style="width:45%"></div></div></div>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-main"><i class="fas fa-database"></i><h3>Gestión de Datos</h3></div>
                    <div class="skill-stats">
                        <div class="stat-bar"><span>SQL Queries</span> <span>60%</span><div class="bar"><div class="fill" style="width:60%"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" class="projects">
        <div class="container-wide">
            <h2 class="title">Proyectos Destacados</h2>
            <div class="grid-projects">
                <div class="project-item">
                    <div class="icon-header"><i class="fas fa-gamepad"></i></div>
                    <div class="p-info">
                        <span class="p-cat">DESARROLLO DE VIDEOJUEGOS</span>
                        <h3>Aventura 2D: Lógica Basada en Eventos</h3>
                        <p>Videojuego 2D desarrollado en GDevelop. Implementación de mecánicas complejas mediante POE.</p>
                        <a href="https://gd.games/instant-builds/1ce0e1c1-3f8c-4d4b-a6a1-d0a46759c08f" target="_blank" class="btn-p">Jugar Ahora <i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="icon-header"><i class="fas fa-coffee"></i></div>
                    <div class="p-info">
                        <span class="p-cat">DESARROLLO BACKEND</span>
                        <h3>Sistema de Gestión Java</h3>
                        <p>Aplicación robusta con Java SE aplicando pilares de POO como herencia y encapsulamiento.</p>
                        <a href="https://github.com/allanrodriguez1610-blip/Mi-Portafolio-Profesional" target="_blank" class="btn-p dark-p">Ver Código <i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="icon-header"><i class="fas fa-vr-cardboard"></i></div>
                    <div class="p-info">
                        <span class="p-cat">REALIDAD AUMENTADA</span>
                        <h3>Visualización Merge Cube</h3>
                        <p>Experiencia AR utilizando tecnología Merge Cube con integración de modelos 3D.</p>
                        <a href="https://edu.delightex.com/WUR-SFD" target="_blank" class="btn-p">Ver Experiencia <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact-section">
        <div class="container">
            <h2 class="title">Contacto</h2>
            <div class="contact-card">
                <form name="contact" method="POST" data-netlify="true" class="contact-form">
                    <div class="input-group"><label>Nombre</label><input type="text" name="name" required></div>
                    <div class="input-group"><label>Correo</label><input type="email" name="email" required></div>
                    <div class="input-group"><label>Mensaje</label><textarea name="message" rows="4" required></textarea></div>
                    <button type="submit" class="btn-dark-full">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Allan Rodriguez Quintana</p>
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
