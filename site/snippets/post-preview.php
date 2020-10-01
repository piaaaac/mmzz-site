<?php

/**
 * @param $post - Kirby page
 */

?>

<div class="col-lg-6 post-preview">
	<div class="row">
		<div class="col-12">

			<header>
				<?= $post->postDate()->value() ?>
				<?= implode(", ", $post->tags()->split()) ?>
			</header>
			<h2 class="font-large"><?= $post->title() ?></h2>
			<img class="img-fluid" src="<?= $post->cover()->toFile()->url() ?>" />

		</div>
	</div>
</div>