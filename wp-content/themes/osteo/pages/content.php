<?php
/*
Template Name: Contenu riche
*/

$page_hero_title_intro = get_the_title();
$page_content_image = get_field('page_content_image');

if($page_content_image){
    $page_content_image_URL = lsd_get_thumb($page_content_image, '1920_1080');
}
$page_content_intro = get_field('page_content_intro');

get_header();
?>


<div class="intro-page" style="background-image: url('<?php echo $page_content_image_URL; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
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

        <?php if($page_home_hero_text_intro): ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="container-text-hero">
                        <div class="row">
                            <?php foreach ($page_home_hero_text_intro as $page_home_hero_text_intro_item):
                                $title_text_hero = $page_home_hero_text_intro_item['page_home_hero_text_intro_title'];
                                $text_text_hero = $page_home_hero_text_intro_item['page_home_hero_text_intro_text'];
                                $text_label_hero = $page_home_hero_text_intro_item['page_home_hero_text_label'];
                                $text_page_id_hero = $page_home_hero_text_intro_item['page_home_hero_text_page'];
                                ?>
                                <div class="col-sm-3">
                                    <?php if($title_text_hero): ?>
                                        <div class="title-light title-text-hero title medium">
                                            <?= $title_text_hero; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($text_text_hero): ?>
                                        <div class="text-text-hero text-medium">
                                            <?= $text_text_hero; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($text_label_hero && $text_page_id_hero): ?>
                                        <a href="<?= get_the_permalink($text_page_id_hero); ?>" class="link-text-hero link">
                                            <?= $text_label_hero; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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
