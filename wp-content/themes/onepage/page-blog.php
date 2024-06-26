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

    <?php get_header(); ?>


    <main class="wrapper-posts pt-10 pb-14">

        <section class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary text-center">NOSSAS NOTÍCIAS</h2>
                <h1 class="display-4 mb-6 text-center">Aqui estão as últimas notícias da empresa em nosso blog que mais chamaram a atenção. </h1>
            </div>
        </section>


        <section class="container-search ">
            <div><?php get_search_form(); ?></div>

        </section>
        <section class="blog-posts pt-10">
            <?php
            //argumentos para consulta das páginas
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Define os argumentos para a consulta
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 12,
                'paged' => $paged,
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
                            <a href="<?php the_permalink();  ?>">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-blog')); ?>
                            </a>
                        </div>

                        <div class="blog-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $category = $categories[0];
                        ?>
                            <div class="category-card <?php echo esc_attr($category->slug); ?>">
                                <?php echo '<p>' . esc_html($category->name) . '</p>'; ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="container-lead-more">
                            <a class="lead-more" href="<?php echo get_permalink() ?>">Ler mais...</a>
                        </div>

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


    <?php get_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>

</html>