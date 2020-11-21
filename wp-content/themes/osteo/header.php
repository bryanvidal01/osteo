
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>

    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/slick.js'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo get_site_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Casa">
                </a>
            </div>
            <div class="col-sm-5">
                <h1 class="intro uppercase">
                    Tierosteo Schuepbach
                </h1>
            </div>
            <div class="col-sm-5 text-right">
                <div class="navigation">
                    <?php wp_nav_menu( ); ?>
                </div>
            </div>
        </div>
    </div>
</header>
