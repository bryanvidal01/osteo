<?php
    $page_content_text_under_image_items = get_sub_field('page_content_text_under_image_items');
?>

<?php if($page_content_text_under_image_items): ?>
<section class="text-under-image">
    <div class="container">
        <div class="row">
            <?php
            foreach ($page_content_text_under_image_items as $page_content_text_under_image_item):
                $page_content_text_under_image_item_image = $page_content_text_under_image_item['page_content_text_under_image_item_image'];
                $page_content_text_under_image_item_image_URL = '';

                if($page_content_text_under_image_item_image){
                    $page_content_text_under_image_item_image_URL = lsd_get_thumb($page_content_text_under_image_item_image, 'presentationPortraitSize');
                }
                $page_content_text_under_image_item_title = $page_content_text_under_image_item['page_content_text_under_image_item_title'];
                $page_content_text_under_image_item_text = $page_content_text_under_image_item['page_content_text_under_image_item_text'];
            ?>

            <div class="col-sm-4">
                <img src="<?= $page_content_text_under_image_item_image_URL; ?>" alt="" width="100%">
                <h3 class="title">
                    <?= $page_content_text_under_image_item_title; ?>
                </h3>
                <div class="description-push-under text-medium">
                    <?= $page_content_text_under_image_item_text; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
