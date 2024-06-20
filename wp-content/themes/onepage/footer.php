<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>

                        <nav class="nav social social-white">
                            <?php
                            $social_options = get_option('acme_social_options', array());

                            if (!empty($social_options)) {
                                echo '<div class="nav social social-white">';
                                if (isset($social_options['acme_social_twitter']) && !empty($social_options['acme_social_twitter'])) {
                                    echo '<a target="_blank" href="' . esc_url($social_options['acme_social_twitter']) . '"><i class="fab fa-twitter"></i></a>';
                                }
                                if (isset($social_options['acme_social_facebook']) && !empty($social_options['acme_social_facebook'])) {
                                    echo '<a target="_blank" href="' . esc_url($social_options['acme_social_facebook']) . '"><i class="fab fa-facebook-f"></i></a>';
                                }
                                if (isset($social_options['acme_social_dribbble']) && !empty($social_options['acme_social_dribbble'])) {
                                    echo '<a target="_blank" href="' . esc_url($social_options['acme_social_dribbble']) . '"><i class="fab fa-dribbble"></i></a>';
                                }
                                if (isset($social_options['acme_social_instagram']) && !empty($social_options['acme_social_instagram'])) {
                                    echo '<a target="_blank" href="' . esc_url($social_options['acme_social_instagram']) . '"><i class="fab fa-instagram"></i></a>';
                                }
                                if (isset($social_options['acme_social_youtube']) && !empty($social_options['acme_social_youtube'])) {
                                    echo '<a target="_blank" href="' . esc_url($social_options['acme_social_youtube']) . '"><i class="fab fa-youtube"></i></a>';
                                }
                                echo '</div>';
                            }
                            ?>

                        </nav>

                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <?php
                    function get_option_or_default($options, $key, $default)
                    {
                        return isset($options[$key]) ? $options[$key] : $default;
                    }

                    function format_address($address_options)
                    {
                        $address_street = get_option_or_default($address_options, 'acme_address_street', 'Rua não definida');
                        $address_number = get_option_or_default($address_options, 'acme_address_number', 'Número do endereço não definido');
                        $address_city = get_option_or_default($address_options, 'acme_address_city', 'Cidade não definida');
                        $address_state = get_option_or_default($address_options, 'acme_address_state', 'Estado não definido');
                        $address_country = get_option_or_default($address_options, 'acme_address_country', 'País não definido');

                        return $address_street . ', ' . $address_number . ', ' . $address_city . ', ' . $address_state . ', ' . $address_country;
                    }
                    ?>

                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <?php
                        $options = get_option('acme_contact_options', array());
                        $email = get_option_or_default($options, 'acme_contact_email', 'Email não definido');
                        $phone = get_option_or_default($options, 'acme_contact_phone', 'Telefone não definido');
                        $phone_link = '55' . preg_replace('/\D+/', '', $phone); // Add '55' antes do numero do telefone

                        $address_options = get_option('acme_address_options', array());
                        $address = format_address($address_options);
                        ?>
                        <address class="pe-xl-15 pe-xxl-17"><?php echo esc_html($address); ?></address>
                        <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a> <br>
                        <a href="https://wa.me/<?php echo esc_attr($phone_link); ?>" target="_blank"><?php echo esc_html($phone); ?></a>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-footer',
                            'container' => false,
                            'menu_class' => 'list-unstyled mb-0',
                        ))
                        ?>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none"></div>
                                            <div class="response" id="mce-success-response2" style="display:none"></div>
                                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>

    <?php wp_footer(); ?>
</body>

</html>