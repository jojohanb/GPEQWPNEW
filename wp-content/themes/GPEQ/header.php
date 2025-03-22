<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>GPEQ</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
    <section class="top">
        <div class="logo-container">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo '<img src="' . get_template_directory_uri() . '"wp-content/uploads/2024/11/logo-gpeq.png" alt="GPEQ Logo">';
            }
            ?>
            <p id="nome-logo">GPEQ</p>
        </div>
        <div class="opcoes">
            <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu')); ?>
            <button id="publicar">Publicar</button>
            <img id="perfil" src="wp-content/uploads/2024/12/76f3f3007969fd3b6db21c744e1ef289.jpg">
        </div>
    </section>
</header>
