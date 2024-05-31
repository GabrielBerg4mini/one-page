<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php the_title() ?>
    </title>

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

        <section class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary text-center">NOSSAS NOTÍCIAS</h2>
                <h1 class="display-4 mb-6 text-center">
                    Aqui estão os últimos Blgos sobre <?php echo strtolower(single_cat_title('', false)); ?> da empresa que mais chamaram a atenção.
                </h1>
            </div>
        </section>

        <section class="category pt-10">
            <h3 class="fs-15 text-uppercase text-primary>Categorias">Categorias</h3>
            <section class="container-category">
                <?php

                $categories = get_categories();
                $current_category = get_queried_object();

                foreach ($categories as $category) {
                    $class = ($category->term_id == $current_category->term_id) ? 'link-blog current-menu-item' : 'link-blog';
                    echo '<a class="' . $class . '" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                }

                ?>
            </section>
        </section>

        <section class=" blog-posts pt-10">
            <?php
            //argumentos para consulta das páginas
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Define os argumentos para a consulta
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 12,
                'paged' => $paged,
                'category_name' => single_cat_title('', false) // Adiciona este argumento para filtrar por categoria
            );

            // Faz a consulta
            $blog_posts = new WP_Query($args);

            // Verifica se há posts para exibir
            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                    <article class="blog-post">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="title-blog"><?php the_title(); ?></h2>
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

                        <a class="lead-more" href="<?php echo get_permalink() ?>">Ler mais...</a>

                    </article>
            <?php
                endwhile;
                // Restaura os dados do post original
                wp_reset_postdata();
            else :
                _e('Desculpe, não há posts para exibir.');
            endif;
            ?>
        </section>
        <section class="pagination">
            <?php
            //Paginação
            $numberBig = 999999999;
            echo paginate_links(array(
                'base' => str_replace($numberBig, '%#%', esc_url(get_pagenum_link($numberBig))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $blog_posts->max_num_pages,
            ));

            //restaura os dados do post original
            wp_reset_postdata();
            ?>
        </section>
    </main>

    <footer class="bg-dark text-inverse">
        <?php get_footer(); ?>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>

</html>