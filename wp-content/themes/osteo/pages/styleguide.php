<?php
/*
Template Name: Styleguide
*/

get_header();
?>

<!-- Titles -->
<div class="title italic serif big">
    Brand
</div>

<div class="title light sans-serif big">
    experience
</div>

<div class="title serif big uppercase has-border">
    ABOUT
</div>

<br/>
<br/>
<!-- Textes -->

<div class="sans-serif small">Skills</div>
<div class="sans-serif uppercase small">Product design</div>

<div class="sans-serif medium">Latest <span class="sans-serif medium italic">work</span></div>

<br/>
<br/>

<div class="sans-serif medium">Independent art director
    & digital designer specialized in Interaction Design, Mobile application
    and Brand strategy</div>


<!-- Composants -->

<div class="image-follow">
    <div class="sans-serif uppercase small">Product design</div>
    <img src="https://images.pexels.com/photos/5588662/pexels-photo-5588662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
</div>
<div class="image-follow">
    <div class="sans-serif uppercase small">Product design</div>
    <img src="https://images.pexels.com/photos/4915593/pexels-photo-4915593.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
</div>
<div class="image-follow">
    <div class="sans-serif uppercase small">Product design</div>
    <img src="https://images.pexels.com/photos/4946591/pexels-photo-4946591.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
</div>

<br/>
<br/>


<button class="button-round">
    <div class="round"></div>
    <div class="text uppercase sans-serif light">
        View Case
    </div>
</button>





<br/>
<br/>

    <button class="c-magnetic-btn u-relative"
            data-threshold="60"
            data-ratio="3.5"
            data-max="100"
            data-scale="1.1"
            data-ease="0.225">
        <span class="t-btn-label u-flex u-center-xy">Hover me.</span>
        <span class="o-circle u-fit u-absolute u-pos-tl"></span>
    </button>
<?php
get_footer();
