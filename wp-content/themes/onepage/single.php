<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

</head>

<body>
    <header class="wrapper bg-gray">
        <?php get_header(); ?>
    </header>

    <main class="container pt-10 pb-14">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </div>
        <?php
            endwhile;
        else :
            _e('Desculpe, não há posts para exibir.');
        endif; ?>
    </main>

    <footer class="bg-dark text-inverse">
        <?php get_footer(); ?>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>

</html>