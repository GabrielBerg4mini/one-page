<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>One Page</title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<style>
    .accordion-wrapper .card {
        box-shadow: none;
        background: none;
        margin-bottom: 0;
    }
</style>

<body class="onepage">
    <div class="content-wrapper">
        <header class="wrapper bg-gray">
            <?php get_header(); ?>
        </header>
        <!-- /header -->
        <section id="home">
            <div class="wrapper bg-gray">
                <div class="container pt-10 pt-md-14 pb-14 pb-md-17 text-center">
                    <div class="row text-center">
                        <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
                            <h2 class="display-1 mb-4">Creative. Smart. Awesome.</h2>
                            <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10">We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="row text-center mt-10">
                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <figure><img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i8.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i8@2x.png 2x" alt="" /></figure>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.wrapper -->
        </section>
        <!-- /section -->
        <section id="services">
            <div class="wrapper bg-light">
                <div class="container py-14 py-md-17">
                    <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <ul class="progress-list">
                                <li>
                                    <p>Marketing</p>
                                    <div class="progressbar line blue" data-value="100"></div>
                                </li>
                                <li>
                                    <p>Strategy</p>
                                    <div class="progressbar line green" data-value="80"></div>
                                </li>
                                <li>
                                    <p>Development</p>
                                    <div class="progressbar line yellow" data-value="85"></div>
                                </li>
                                <li>
                                    <p>Data Analysis</p>
                                    <div class="progressbar line orange" data-value="90"></div>
                                </li>
                            </ul>
                            <!-- /.progress-list -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h3 class="display-5 mb-5">The full service we are offering is specifically designed to meet your business needs and projects.</h3>
                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur duis mollis commodo.</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">
                        <?php
                        //argumentos para a consulta

                        $args = array(
                            'post_type' => 'acme_services',
                        );
                        // a consulta
                        $the_query = new WP_Query($args);

                        //lopp
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                        ?>
                                <div class="col-md-6 col-lg-3">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'svg-inject icon-svg icon-svg-md mb-3'));
                                    }
                                    ?>
                                    <h4><?php the_title(); ?></h4>
                                    <p class="mb-2"><?php the_content(); ?></p>
                                </div>
                        <?php
                            }
                        } else {
                            echo "<p>Nenhum post encontrado. </p>";
                        }
                        wp_reset_postdata();
                        ?>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.wrapper -->
        </section>
        <!-- /section -->
        <section id="process">
            <div class="wrapper bg-gray">
                <div class="container py-14 py-md-17">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
                        <div class="col-lg-7">
                            <figure><img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i3.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i3@2x.png 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5">
                            <h2 class="fs-15 text-uppercase text-line text-primary mb-3">How It Works?</h2>
                            <h3 class="display-5 mb-7 pe-xxl-5">Everything you need on creating a business process.</h3>
                            <div class="d-flex flex-row mb-4">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/lineal/light-bulb.svg" class="svg-inject icon-svg icon-svg-sm text-blue me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Collect Ideas</h4>
                                    <p class="mb-1">Nulla vitae elit libero pharetra augue dapibus.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-4">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/lineal/pie-chart-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Data Analysis</h4>
                                    <p class="mb-1">Vivamus sagittis lacus augue laoreet vel.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Magic Touch</h4>
                                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-7 order-lg-2">
                            <figure><img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i2.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5">
                            <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
                            <h3 class="display-5 mb-7">A few reasons why our valued customers choose us.</h3>
                            <div class="accordion accordion-wrapper" id="accordionExample">
                                <div class="card plain accordion-item">

                                    <?php
                                    $args = array(
                                        'post_type' => 'acme_process',
                                    );
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) {
                                        $first_post = true;
                                        while ($the_query->have_posts()) {
                                            $the_query->the_post();
                                    ?>
                                            <div class="card">
                                                <div class="card-header" id="heading<?php the_ID(); ?>">
                                                    <button class="accordion-button  <?php if ($first_post) echo 'active-title' ?>" data-bs-toggle="collapse" data-bs-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
                                                        <?php the_title(); ?>
                                                    </button>
                                                </div>
                                                <div id="collapse<?php the_ID(); ?>" class="accordion-collapse collapse <?php if ($first_post) echo 'show'; ?>" aria-labelledby="heading<?php the_ID(); ?>" data-bs-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $first_post = false;
                                        }
                                    } else {
                                        echo "<p>Nenhum post encontrado. </p>";
                                    }
                                    wp_reset_postdata();
                                    ?>
                                    <!--/.accordion-item -->
                                </div>
                                <!--/.accordion -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.wrapper -->
        </section>
        <!-- /section -->
        <section id="about">
            <div class="wrapper bg-light">
                <div class="container py-14 py-md-17">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-4">
                            <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
                            <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
                            <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
                        </div>
                        <!--/column -->
                        <div class="col-lg-8">
                            <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t1.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t1@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Cory Zamora</h4>
                                            <div class="meta mb-2">Marketing Specialist</div>
                                            <p class="mb-2">Etiam porta sem magna malesuada mollis.</p>
                                            <nav class="nav social justify-content-center text-center mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-slack"></i></a>
                                                <a href="#"><i class="uil uil-linkedin"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t2.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t2@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Coriss Ambady</h4>
                                            <div class="meta mb-2">Financial Analyst</div>
                                            <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p>
                                            <nav class="nav social justify-content-center text-center mb-0">
                                                <a href="#"><i class="uil uil-youtube"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t3.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t3@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Nikolas Brooten</h4>
                                            <div class="meta mb-2">Sales Manager</div>
                                            <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p>
                                            <nav class="nav social justify-content-center text-center mb-0">
                                                <a href="#"><i class="uil uil-linkedin"></i></a>
                                                <a href="#"><i class="uil uil-tumblr-square"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t4.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t4@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Jackie Sanders</h4>
                                            <div class="meta mb-2">Investment Planner</div>
                                            <p class="mb-2">Nullam risus eget urna mollis ornare vel eu leo.</p>
                                            <nav class="nav social justify-content-center text-center mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t5.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/t5@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Tina Geller</h4>
                                            <div class="meta mb-2">Assistant Buyer</div>
                                            <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                                            <nav class="nav social justify-content-center text-center mb-0">
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-slack"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.wrapper -->
        </section>
        <!-- /section -->
        <section id="testimonials">
            <div class="wrapper bg-gray">
                <div class="container py-14 py-md-17">
                    <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 align-items-center">
                        <div class="col-lg-7 order-lg-2">
                            <figure><img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i4.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i4@2x.png 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 mt-lg-12">
                            <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $args = array(
                                            'post_type' => 'acme_depoimentos'
                                        );
                                        $the_query = new WP_Query($args);

                                        if ($the_query->have_posts()) {
                                            while ($the_query->have_posts()) {
                                                $the_query->the_post();
                                        ?>
                                                <div class="swiper-slide">
                                                    <blockquote class="icon icon-top fs-lg text-center">
                                                        <p><?php the_content(); ?></p>
                                                        <div class="blockquote-details justify-content-center text-center">
                                                            <div class="info ps-0">
                                                                <h5 class="mb-1"><?php echo get_post_meta(get_the_ID(), '_acme_author_name_key', true); ?></h5>
                                                                <p class="mb-0"><?php echo get_post_meta(get_the_ID(), '_acme_author_position_key', true); ?></p>
                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <!--/.swiper-slide -->
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="px-lg-5">
                    <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c1.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c2.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c3.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c4.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c5.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/c6.png" alt="" /></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /div -->
            </div>
            <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section id="contact">
        <div class="wrapper bg-light">
            <div class="container py-14 py-md-17">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i5.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Get In Touch</h2>
                        <h3 class="display-5 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Moonshine St. 14/05 Light City, London</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>00 (123) 456 78 90</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <?php get_footer(); ?>
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>

</html>