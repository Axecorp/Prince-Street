<section class="section conversion" style="background-image: url(<?php echo ($block["background_image"]);?>);">
    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"];?></h2>
        <div class="stats">
            <div class="top gradient-text">up to</div>
            <div class="numbers gradient-text"><?php echo $block["numbers"];?></div>
            <div class="stat gradient-text"><?php echo $block["stat"];?></div>
        </div>
        <div class="blurb">
            <div class="box">
                <div class="title"><?php echo $block["blurb"]["title"]?></div>
                <div class="dropdowns">
                    <img src="<?php echo $block["blurb"]["dropdowns"]?>" alt="">
                </div>
                <div class="description">
                    <?php echo $block["blurb"]["description"]?>
                </div>
            </div>
            <a href="<?php echo $block["blurb"]["button"]["link"]["url"];?>" class="button">
                <div class="icon"><img src="<?php echo $block["blurb"]["button"]["icon"];?>" alt=""></div>
                <div class="link"><?php echo $block["blurb"]["button"]["link"]["title"];?></div>
            </a>
        </div>
        <div class="scroll-down" no="3">
            <div class="icon">
                <img src="<?php echo wp_get_attachment_image_url(27, "full")?>" alt="">
            </div>
            <div class="text"><?php echo $block["scroll_down"]?></div>
        </div>
    </div>
</section>