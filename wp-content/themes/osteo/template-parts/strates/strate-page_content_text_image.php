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
            <div class="col-sm-10 mx-auto">
                <div class="row">
                    <?php if($page_content_text_image_position): ?>
                        <div class="col-sm-4">
                            <img src="<?= $page_content_text_image_image_URL; ?>" alt="">
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-8">
                        <div class="container-content <?= ($page_content_text_image_position)? 'left' : 'right'; ?>">
                            <h3 class="title medium">
                                <?= $page_content_text_image_sup_title; ?>
                            </h3>
                            <h4 class="title big-medium">
                                <?= $page_content_text_image_title; ?>
                            </h4>
                            <div class="text-medium">
                                <?= $page_content_text_image_text; ?>
                            </div>
                        </div>
                    </div>
                    <?php if(!$page_content_text_image_position): ?>
                        <div class="col-sm-4">
                            <img src="<?= $page_content_text_image_image_URL; ?>" alt="">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
