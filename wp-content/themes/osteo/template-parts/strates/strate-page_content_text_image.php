<?php
$page_content_text_image_sup_title = get_sub_field('page_content_text_image_sup_title');
$page_content_text_image_title = get_sub_field('page_content_text_image_title');
$page_content_text_image_text = get_sub_field('page_content_text_image_text');
$page_content_text_image_image = get_sub_field('page_content_text_image_image');

if($page_content_text_image_image){
    $page_content_text_image_image_URL = lsd_get_thumb($page_content_text_image_image, '390_520');
}
$page_content_text_image_position = get_sub_field('page_content_text_image_position');

?>

<section class="text-image">
    <div class="container">
        <div class="row">
            <?php if($page_content_text_image_position): ?>
                <div class="col-sm-4">
                    <img src="<?= $page_content_text_image_image_URL; ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="col-sm-8">
                <h3 class="title medium">
                    <?= $page_content_text_image_sup_title; ?>
                </h3>
                <h4 class="title big">
                    <?= $page_content_text_image_title; ?>
                </h4>
                <?= $page_content_text_image_text; ?>
            </div>
            <?php if(!$page_content_text_image_position): ?>
                <div class="col-sm-4">
                    <img src="<?= $page_content_text_image_image_URL; ?>" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
