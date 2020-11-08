<?php
/*
Template Name: Homepage
*/

get_header();

// Hero
$page_home_hero_image = get_field('page_home_hero_image');

$page_home_hero_image_URL = '';
if($page_home_hero_image){
    $page_home_hero_image_URL = lsd_get_thumb($page_home_hero_image, 'presentationPaysageSize');
}

$page_home_hero_title_intro = get_field('page_home_hero_title_intro');
$page_home_hero_sub_title_intro = get_field('page_home_hero_sub_title_intro');
$page_home_hero_text_intro = get_field('page_home_hero_text_intro');

// Presentation
$page_home_presentation_sup_title = get_field('page_home_presentation_sup_title');
$page_home_presentation_title = get_field('page_home_presentation_title');
$page_home_presentation = get_field('page_home_presentation');

// Discover
$page_home_discover_sup_title = get_field('page_home_discover_sup_title');
$page_home_discover_title = get_field('page_home_discover_title');
$page_home_discover_text = get_field('page_home_discover_text');
$page_home_discover_label = get_field('page_home_discover_label');
$page_home_discover_url = get_field('page_home_discover_url');
$page_home_discover_image = get_field('page_home_discover_image');

$page_home_discover_image_URL = '';
if($page_home_discover_image){
    $page_home_discover_image_URL = lsd_get_thumb($page_home_discover_image, '390_520');
}

$page_home_discover_background = get_field('page_home_discover_background');

$page_home_discover_background_URL = '';
if($page_home_discover_background){
    $page_home_discover_background_URL = lsd_get_thumb($page_home_discover_background, 'presentationPaysageSize');
}

// Tasty
$page_home_tasty_sup_title = get_field('page_home_tasty_sup_title');
$page_home_tasty_title = get_field('page_home_tasty_title');
$page_home_tasty_items = get_field('page_home_tasty_items');
?>

<div class="intro-page home" style="background-image: url('<?php echo $page_home_hero_image_URL; ?>');">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-content">
                    <?php if($page_home_hero_title_intro): ?>
                        <div class="title big">
                            <?= $page_home_hero_title_intro; ?>
                        </div>
                    <?php endif; ?>

                    <?php if($page_home_hero_sub_title_intro): ?>
                        <div class="description-intro">
                            <?= $page_home_hero_sub_title_intro; ?>
                        </div>
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


<div class="section presentation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php if($page_home_presentation_sup_title): ?>
                <div class="title medium">
                    <?= $page_home_presentation_sup_title; ?>
                </div>
                <?php endif; ?>

                <?php if($page_home_presentation_title): ?>
                    <div class="title big-medium">
                        <?= $page_home_presentation_title; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($page_home_presentation): ?>
        <div class="row">
            <?php
            foreach ($page_home_presentation as $page_home_presentation_item):
                $page_home_presentation_item_title = $page_home_presentation_item['page_home_presentation_type'];
                $page_home_presentation_item_title_photo = $page_home_presentation_item['page_home_presentation_photo'];

                $page_home_presentation_item_title_photo_url = '';
                if($page_home_presentation_item_title_photo){
                    $page_home_presentation_item_title_photo_url = lsd_get_thumb($page_home_presentation_item_title_photo, '390_490');
                }
                $page_home_presentation_item_title_text = $page_home_presentation_item['page_home_presentation_text'];
                $page_home_presentation_item_title_label = $page_home_presentation_item['page_home_presentation_label'];
                $page_home_presentation_item_title_url = $page_home_presentation_item['page_home_presentation_url'];
            ?>
                <div class="col-sm-4">
                    <div class="push-presentation">
                        <?php if($page_home_presentation_item_title_photo_url): ?>
                        <img src="<?= $page_home_presentation_item_title_photo_url; ?>" alt="">
                        <?php endif; ?>

                        <div class="push-presentation-content">
                            <?php if($page_home_presentation_item_title): ?>
                            <div class="title medium white">
                                <?php echo $page_home_presentation_item_title; ?>
                            </div>
                            <?php endif; ?>

                            <?php if($page_home_presentation_item_title_text): ?>
                            <div class="text-medium white">
                                <?= $page_home_presentation_item_title_text; ?>
                            </div>
                            <?php endif; ?>

                            <?php if($page_home_presentation_item_title_label && $page_home_presentation_item_title_url): ?>
                                <a href="<?= get_the_permalink($page_home_presentation_item_title_url); ?>" class="link white"><?= $page_home_presentation_item_title_label; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>


<div class="section discover" style="background-image: url(<?= $page_home_discover_background_URL; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <?php if($page_home_discover_sup_title): ?>
                    <div class="title medium white">
                        <?= $page_home_discover_sup_title; ?>
                    </div>
                <?php endif; ?>

                <?php if($page_home_discover_title): ?>
                    <div class="title big-medium ">
                        <?= $page_home_discover_title; ?>
                    </div>
                <?php endif; ?>

                <?php if($page_home_discover_text): ?>
                <div class="text-medium">
                    <?= $page_home_discover_text; ?>
                </div>
                <?php endif; ?>

                <?php if($page_home_discover_label && $page_home_discover_url): ?>
                    <a href="<?= get_the_permalink($page_home_discover_url); ?>" class="button">
                        <?= $page_home_discover_label; ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-sm-5">
                <?php if($page_home_discover_image_URL): ?>
                <div class="image-width-bg">
                    <img src="<?= $page_home_discover_image_URL; ?>" alt="">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div class="tasty section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php if($page_home_tasty_sup_title): ?>
                    <div class="title medium">
                        <?= $page_home_tasty_sup_title; ?>
                    </div>
                <?php endif; ?>

                <?php if($page_home_tasty_title): ?>
                    <div class="title big-medium">
                        <?= $page_home_tasty_title; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if($page_home_tasty_items): ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="slider-tasty slider">
                    <?php
                    foreach ($page_home_tasty_items as $page_home_tasty_item):
                        $page_home_tasty_item_text = $page_home_tasty_item['page_home_tasty_item_text'];
                        $page_home_tasty_item_post = $page_home_tasty_item['page_home_tasty_item_post'];
                        $page_home_tasty_item_author = $page_home_tasty_item['page_home_tasty_item_author'];
                    ?>
                    <div>
                        <div class="tasty">
                            <?php if($page_home_tasty_item_text): ?>
                            <div class="text text-medium">
                                <?= $page_home_tasty_item_text; ?>
                            </div>
                            <?php endif; ?>

                            <?php if($page_home_tasty_item_author): ?>
                            <div class="author title medium">
                                <?= $page_home_tasty_item_author; ?>
                            </div>
                            <?php endif; ?>
                            <?php if($page_home_tasty_item_post): ?>
                                <div class="post">
                                    <?= $page_home_tasty_item_post; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();
