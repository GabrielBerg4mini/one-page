<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog-style.css">

</head>

<body>
    <header class="wrapper bg-gray">
        <?php get_header(); ?>
    </header>

    <main class="wrapper-posts pt-10 pb-14">
        <div class="blog-posts">
            <?php
            // Define os argumentos para a consulta
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
            );

            // Faz a consulta
            $blog_posts = new WP_Query($args);

            // Verifica se há posts para exibir
            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                    <div class="blog-post">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class=""><?php the_title(); ?></h2>
                        </a>
                        <div class="container-img-blog">
                            <?php
                            if (has_post_thumbnail()) {
                                echo '<a href="' . get_permalink() . '">';
                                the_post_thumbnail();
                                echo '</a>';
                            }
                            ?>
                        </div>
                        <div class="blog-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <div>
                            <a class="link-blog" href="<?php get_permalink() ?>">Ler mais...</a>
                        </div>
                    </div>
            <?php
                endwhile;
                // Restaura os dados do post original
                wp_reset_postdata();
            else :
                _e('Desculpe, não há posts para exibir.');
            endif;
            ?>
        </div>
    </main>

    <footer class="bg-dark text-inverse">
        <?php get_footer(); ?>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>

</html>