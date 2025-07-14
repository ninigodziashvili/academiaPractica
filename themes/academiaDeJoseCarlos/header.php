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
    <nav class="nav" id="navbar">
        <button class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <ul class="nav-list" id="nav-list">
            <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
            <li><a href="/cursos/">Cursos</a></li>
             <li><a href="/corsete/">Corset a Medida</a></li>
             <li><a href="/moulage/">Moulage Técnico</a></li>
            <li><a href="/agenda/">Agenda</a></li>
            <li><a href="/biografia/">Biografia</a></li>
            <li><a href="/contacto/">Contacto</a></li>
        </ul>
    </nav>
</header>