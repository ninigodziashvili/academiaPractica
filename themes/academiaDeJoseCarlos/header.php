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
            <ul class="nav-list">
                <li>
                    <a href="<?php echo home_url(); ?>">Blog</a>
                </li>
<li class="dropdown">
      <a href="/cursos/">
    Cursos <i class="fa fa-caret-down"></i>
  </a>
    <ul class="dropdown-menu">
        <li><a href="/moulage/">Moulage Técnico</a></li>
        <li><a href="/corset/">Corset a Medida</a></li>
    </ul>
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
        </nav>
    </header>