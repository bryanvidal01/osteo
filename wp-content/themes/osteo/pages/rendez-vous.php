<?php
/*
Template Name: Rendez-vous
*/

$page_hero_title_intro = get_the_title();
$page_content_image = get_field('page_content_image');

if($page_content_image){
    $page_content_image_URL = lsd_get_thumb($page_content_image, '1920_1080');
}
$page_content_intro = get_field('page_content_intro');

// Content
$page_resa_sub_title = get_field('page_resa_sub_title');
$page_resa_title = get_field('page_resa_title');
$page_resa_text_contact = get_field('page_resa_text_contact');

get_header();
?>

<div class="intro-page not-home" style="background-image: url('<?php echo $page_content_image_URL; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="text-content">
                    <?php if($page_hero_title_intro): ?>
                        <h1 class="title big">
                            <?= $page_hero_title_intro; ?>
                        </h1>
                    <?php endif; ?>

                    <?php if($page_content_intro): ?>
                        <h2 class="description-intro">
                            <?= $page_content_intro; ?>
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-form-resa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="title medium">
                    <?= $page_resa_sub_title; ?>
                </h3>
                <h4 class="title big-medium">
                    <?= $page_resa_title; ?>
                </h4>
                <div class="text-medium">
                    <?= $page_resa_text_contact; ?>
                </div>
            </div>
        </div>
        <form class="row" id="rendez-vous">
            <div class="col-sm-6">
                <label for="yourSubName">
                    Nom
                </label>
                <input type="text" name="yourSubName" placeholder="Votre nom" id="yourSubName">
            </div>
            <div class="col-sm-6">
                <label for="yourName">
                    Prénom
                </label>
                <input type="text" name="yourName" placeholder="Votre prénom" id="yourName">
            </div>
            <div class="col-sm-6">
                <label for="yourMailAdress">
                    Adresse e-mail
                </label>
                <input type="text" name="yourMailAdress" placeholder="Votre e-mail" id="yourMailAdress">
            </div>
            <div class="col-sm-6">
                <label for="yourPhone">
                    Numéro de téléphone
                </label>
                <input type="text" name="yourPhone" placeholder="Votre numéro de téléphone" id="yourPhone">
            </div>
            <div class="col-sm-6">
                <label for="yourNeed">
                    Vous appelez pour
                </label>
                <select name="yourNeed" id="yourNeed">
                    <option value="Chien">
                        Chien
                    </option>
                    <option value="Chat">
                        Chat
                    </option>
                    <option value="N.A.C">
                        N.A.C
                    </option>
                </select>
            </div>
            <div class="col-sm-12">
                <label for="yourMessage">Informations complémentaires</label>
                <textarea name="yourMessage" placeholder="Votre message..." id="yourMessage" cols="30" rows="10"></textarea>
            </div>

            <div class="col-sm-12 text-center">
                <input type="submit" value="Demander un rendez-vous" class="button">
            </div>


            <div class="popin">
                <div class="info-return"></div>
            </div>
        </form>
    </div>
</div>


<?php
if( have_rows('page_content_content') ):
    while ( have_rows('page_content_content') ) : the_row();
        lsd_get_template_part('strates', 'strate', get_row_layout());
    endwhile;
endif;

?>



<?php
get_footer();
