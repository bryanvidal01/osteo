<?php
$page_content_text_center_sup_title =  get_sub_field('page_content_text_center_sup_title');
$page_content_text_center_title =  get_sub_field('page_content_text_center_title');
$page_content_text_center_text =  get_sub_field('page_content_text_center_text');
?>
<section class="text-center-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h3 class="title medium">
                    <?= $page_content_text_center_sup_title; ?>
                </h3>
                <h4 class="title big-medium">
                    <?= $page_content_text_center_title; ?>
                </h4>
                <div class="text-medium">
                <?= $page_content_text_center_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>
