<div id="dinosaur-info">
    <div class="dinosaur-picture-wrapper columns medium-6">
        <img src="<?php print $picture_path; ?>"
             class="<?php print $style; ?>"/>
    </div>
    <div class="dinosaur-main-info columns medium-6">
        <h2 class="dinosaur-name"><?php print $name; ?></h2>

        <div class="dinosaur-bars">
            <div class="dinosaur-life-wrapper">
                <div class="life" style="width: <?php print $life; ?>%"></div>
            </div>
            <div class="dinosaur-mood-wrapper">
                <div class="mood" style="width: <?php print $mood; ?>%"></div>
            </div>
        </div>

        <p><?php print t('Rank'); ?>: <strong><?php print $grade; ?></strong></p>
        <p><?php print t('Age'); ?>: <strong><?php print $age; ?></strong></p>
        <p><?php print t('Food type'); ?>: <strong><?php print $food_type; ?></strong></p>
        <p><?php print t('Favorite food'); ?>: <strong><?php print $favorite_food; ?></strong></p>
    </div>
</div>