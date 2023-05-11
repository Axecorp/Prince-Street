<?php
 $bg = $block["background_image"];
 $heading = $block["heading"];
 $tagline = $block["tagline"];
 $description = $block["description"];
 $button = $block["button"];
 $gif1 = $block["card"]["product_gif"];
 $prd_desc = $block["card"]["product_description"];
 $rating = $block["card"]["rating"];
?>
<section class="section hero" id="hero" style="background-image: url(<?php echo $bg;?>);">    

    <div class="inner">
        <div class="models">
            <img id="gif1" src="<?php echo wp_get_attachment_image_url(89, "full")?>" alt="" class="gif show">
            <img id="gif2" src="<?php echo wp_get_attachment_image_url(88, "full")?>" alt="" class="gif">
            <img id="gif3" src="<?php echo wp_get_attachment_image_url(87, "full")?>" alt="" class="gif">
            <img id="gif4" src="<?php echo wp_get_attachment_image_url(90, "full")?>" alt="" class="gif">
        </div>
        <div class="card">
            <div class="card-content">
                <div class="tagline-m"><?php echo $tagline?></div>
                <div class="card-description">
                    <?php echo $prd_desc;?>
                </div>
                <div class="rating">
                    <img src="<?php echo $rating;?>" alt="">&nbsp;(1000)
                </div>
            </div>
        </div>
        <div class="content">
            <div class="heading"><?php echo $heading; ?></div>
            <div class="tagline"><?php echo $tagline; ?></div>
            <div class="bottom">
                <a class="button" href="<?php echo $button["url"]?>">
                    <img src="<?php echo wp_get_attachment_image_url(28, "full")?>" alt="">
                     <?php echo $button["title"]?></a>
                <div class="description"><?php echo $description?></div>
            </div>
        </div>
    </div>
    <div class="scroll-down" no="1">
        <div class="text">get a tour</div>
        <div class="icon">
            <img src="<?php echo wp_get_attachment_image_url(27, "full")?>" alt="">
        </div>
    </div>
</section>