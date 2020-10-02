<?php

/**
 * @param $post - Kirby page
 */

?>

<div class="post-preview link" data-url="<?= $post->url() ?>">
	<div class="row">
		<div class="col-6">
			<img class="img-fluid" src="<?= $post->cover()->toFile()->url() ?>" />
		</div>
		<div class="col-6">
			<header class="font-sans-s mb-4">
				<?= $post->postDate()->value() ?>
				&nbsp; <?= "#". implode(", &nbsp; #", $post->tags()->split()) ?>
			</header>
			<h2 class="font-large mb-0"><?= $post->title() ?></h2>
		</div>
	</div>
</div>