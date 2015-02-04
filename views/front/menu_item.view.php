<?php
    // Load dictionnary if we want to use __()
    // Nos\I18n::current_dictionary('recipe::common');
?>
<div class="recipe_menu noviusos_enhancer">
<h2><?=$menu->menu_title ?></h2>

<?php
if (!empty($menu->medias->image)) {
    echo $menu->medias->image->htmlImgResized(400, 300);
}
?>
<br>
紹介    <?= $menu->menu_description ?><br>
金額    <?= intval($menu->menu_price) ?><br>
