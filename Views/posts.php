<?php foreach($items as $item):?>

	<?= PHPTheme::widget('postsItem', $item);?>

<?php endforeach;?>

<?php if($button):?>

	<hr>

	<?= PHPTheme::widget('button', $button);?>

<?php endif;?>