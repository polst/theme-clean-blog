<div class="post-preview">
	<a href="<?= $url;?>">
		<h2 class="post-title"><?= $title?></h2>
		<h3 class="post-subtitle"><?= $description;?></h3>
	</a>
	<?php if($created):?><p class="post-meta"><?= $created;?></p><?php endif;?>
</div>