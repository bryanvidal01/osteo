<?php
    $page_content_text_two_col_title =  get_sub_field('page_content_text_two_col_title');
    $page_content_text_two_col_left =  get_sub_field('page_content_text_two_col_left');
    $page_content_text_two_col_right =  get_sub_field('page_content_text_two_col_right');
    $page_content_text_two_col_label =  get_sub_field('page_content_text_two_col_label');
    $page_content_text_two_col_link =  get_sub_field('page_content_text_two_col_link');
?>
<section class="text_two_col">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="title big">
                    <?= $page_content_text_two_col_title; ?>
                </h3>
                <?= $page_content_text_two_col_left; ?>
            </div>
            <div class="col-sm-6">
                <?= $page_content_text_two_col_right; ?>
            </div>
            <div class="col-sm-12 text-center">
                <a href="<?= $page_content_text_two_col_link; ?>" class="button primary">
                    <?= $page_content_text_two_col_label; ?>
                </a>
            </div>
        </div>
    </div>
</section>

