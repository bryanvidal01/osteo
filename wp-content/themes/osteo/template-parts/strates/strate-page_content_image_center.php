<?php
 $page_content_image_center_image = get_sub_field('page_content_image_center_image');
 if($page_content_image_center_image){
     $page_content_image_center_image_URL = lsd_get_thumb($page_content_image_center_image, '1920_1080');
 }
?>

<section class="image-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?= $page_content_image_center_image_URL; ?>" alt="">
            </div>
        </div>
    </div>
</section>
