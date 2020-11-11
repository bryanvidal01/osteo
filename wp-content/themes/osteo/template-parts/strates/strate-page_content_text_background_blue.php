<?php
$page_content_text_background_blue_sup_title = get_sub_field('page_content_text_background_blue_sup_title');
$page_content_text_background_blue_title = get_sub_field('page_content_text_background_blue_title');
$page_content_text_background_blue_text = get_sub_field('page_content_text_background_blue_text');

?>

<section class="text-background-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mx-auto">
                <h3 class="title medium">
                    <?= $page_content_text_background_blue_sup_title; ?>
                </h3>
                <h4 class="title big">
                    <?= $page_content_text_background_blue_title; ?>
                </h4>
                <?= $page_content_text_background_blue_text; ?>
            </div>
        </div>
    </div>
</section>
