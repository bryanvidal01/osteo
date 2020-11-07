
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>

    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo Casa">
                </a>
            </div>
            <div class="col-sm-6">
                <h1 class="sans-serif uppercase small intro">
                    independent art director<br>& digital designer
                </h1>
            </div>
            <div class="col-sm-2">
                <div class="container-checkbox select-theme">
                    <p>
                        <input type="checkbox" id="theme" />
                        <label for="theme" class="sans-serif small">Dark mode</label>
                    </p>
                </div>
            </div>
            <div class="col-sm-2 text-right">
                <button class="navigation">
                    <div class="bar"></div>
                    <div class="bar"></div>
                </button>
            </div>
        </div>
    </div>
</header>
