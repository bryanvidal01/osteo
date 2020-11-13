<?php
$page_content_iframe_content = get_sub_field('page_content_iframe_content');
?>

<section class="iframe">
    <div class="container">
        <div class="col-sm-10 mx-auto">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <?= $page_content_iframe_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
