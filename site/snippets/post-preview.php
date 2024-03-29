<?php

/**
 * @param $post - Kirby page
 */

?>

<div class="post-preview link" data-url="<?= $post->url() ?>">
	<header class="font-sans-s mb-2">
		<?= $post->postDate()->value() ?>
		&nbsp; <?= "#". implode(", &nbsp; #", $post->tags()->split()) ?>
	</header>
	<h2 class="font-large mb-0"><?= $post->title() ?></h2>
	<div class="row">
		<div class="col-8">
			<img class="img-fluid" src="<?= $post->cover()->toFile()->url() ?>" />
		</div>
	</div>
</div>