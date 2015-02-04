<?php
if (count($menu_list) > 0) {
    foreach ($menu_list as $menu) {?>
        <div class="col-md-12">
            <h2><?=$menu->menu_title ?></h2>
</div>
        <div class="col-md-4">
        <?php
        if (!empty($menu->medias->image)) {
            echo $menu->medias->image->htmlImgResized(200, 150);
        }
        ?>
</div>
        <div class="col-md-8">
            紹介    <?= $menu->menu_description ?><br>
        金額    <?= intval($menu->menu_price) ?>
        </div>
    <?php }
}
