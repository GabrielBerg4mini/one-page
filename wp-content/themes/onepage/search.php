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
        <section class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary text-center">NOTÍCIAS BUSCADAS</h2>
                <h1 class="display-4 mb-6 text-center">Aqui estão as notícias que você pesquisou em nosso blog. </h1>
            </div>
        </section>
        <section class="blog-posts pt-10">
            <?php
            $search_term = get_search_query(); // O termo de pesquisa
            $category_id = isset($_GET['category']) ? $_GET['category'] : ''; // O ID da categoria selecionada

            $args = array(
                's' => $search_term,
                'post_type' => 'post',
                'posts_per_page' => 12,
            );

            if (!empty($category_id)) {
                $args['category__in'] = array($category_id);
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
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
                        <div><a class="lead-more" href="<?php echo get_permalink() ?>">Ler mais...</a>
                        </div>
                    </article>
            <?php
                }
            } else {
                echo 'Nenhum post encontrado.';
            }

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