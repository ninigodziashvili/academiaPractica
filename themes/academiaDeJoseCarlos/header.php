<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Academia</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
            </div>
            <ul class="nav-link">
                <li>
                    <a href="<?php echo home_url(); ?>">Blog</a>
                </li>
                <li>
                    <a href="/cursos/">Cursos</a>
                </li>
                <li>
                    <a href="/agenda/">Agenda</a>
                </li>
                 <li>
                    <a href="/biografia/">Biografia</a>
                </li>
                <li>
                    <a href="/contacto/">Contacto</a>
                </li>
            </ul>
            <div class="burger">
                <div class="burger-line1"></div>
                <div class="burger-line2"></div>
                <div class="burger-line3"></div>
            </div>
        </nav>
    </header>