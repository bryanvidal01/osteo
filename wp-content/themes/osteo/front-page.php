<?php
/*
Template Name: Homepage
*/

get_header();
?>

<section class="intro-page">
    <h2 class="title italic serif big">Brand</h2>
    <h2 class="title sans-serif big light text-center world-2">
        <img src="https://images.pexels.com/photos/5255191/pexels-photo-5255191.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-1" alt="">
        experience
        <img src="https://images.pexels.com/photos/5277082/pexels-photo-5277082.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-2" alt="">
    </h2>
    <h2><span class="title sans-serif big light">& </span> <span class="title italic serif big">Digital </span> <span class="title sans-serif big light"> design.</span></h2>
    <img src="https://images.pexels.com/photos/2052217/pexels-photo-2052217.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-3" alt="">
</section>



<section class="section-video-full">
    <video src="<?php echo get_template_directory_uri(); ?>/assets/video/video.mp4" autoplay muted loop></video>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <p class="uppercase small light">
                    Casanova <br/>
                    & Kuoch
                </p>
            </div>

            <div class="col-sm-6">
                <p class="uppercase small light">
                    Member Creative pair.
                </p>
            </div>

            <div class="col-sm-3 text-right">
                <p class="light last-text">
                    Two creative designer who create original & useful interface for digital brand with love.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="button-round white">
                    <div class="round"></div>
                    <div class="text uppercase sans-serif light">
                        Showreel
                    </div>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="author-letter">
                    C<br/>
                    &k
                </div>
            </div>
        </div>
    </div>
</section>


<section class="skills">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <p class="sans-serif small">
                    Skills
                </p>

                <ul class="list-skills">
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Product design</div>
                            <img src="https://images.pexels.com/photos/5496586/pexels-photo-5496586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Digital art direction</div>
                            <img src="https://images.pexels.com/photos/5588662/pexels-photo-5588662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Interaction</div>
                            <img src="https://images.pexels.com/photos/4463762/pexels-photo-4463762.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Mobile App</div>
                            <img src="https://images.pexels.com/photos/4993100/pexels-photo-4993100.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Brand strategy</div>
                            <img src="https://images.pexels.com/photos/5087541/pexels-photo-5087541.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">Mobile App</div>
                            <img src="https://images.pexels.com/photos/5393816/pexels-photo-5393816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="image-follow">
                            <div class="sans-serif uppercase small">User experience</div>
                            <img src="https://images.pexels.com/photos/4862663/pexels-photo-4862663.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-sm-8 text-right">
                <div class="title big serif has-border uppercase">
                    About
                </div>

                <div class="container-text">
                    <div class="text-about">
                        <p class="sans-serif">
                            Independent art director<br/>
                            & digital designer specialized in Interaction Design, Mobile application<br/>
                            and Brand strategy
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
