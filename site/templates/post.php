<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<main id="post">

	<section>
	  <div class="container-fluid">
	    <div class="row">
	    	
	    	<div class="col-lg-8">
	    		<h1 class="font-huge"><?= $page->title() ?></h1>
	    		<div class="font-sans-s mb-4">
						<?= $page->postDate()->value() ?>
						&nbsp; <?= "#". implode(", &nbsp; #", $page->tags()->split()) ?>
					</div>
	    	</div>
	    	
	    	<div class="col-lg-6">
	    		<div class="spacer my-5 py-5"></div>
	    		<div class="spacer my-5 py-5"></div>
	    		<div class="spacer my-5 py-5"></div>
					<div class="font-large"><?= $page->text()->kt() ?></div>
	    	</div>

	    	<div class="col-lg-6">
    			<img class="img-fluid mb-3" src="<?= $page->cover()->toFile()->url() ?>" />
	    		<?php foreach ($page->postImages()->toFiles() as $img): ?>
	    			<img class="img-fluid mb-3" src="<?= $img->url() ?>" />
	    		<?php endforeach ?>
	    	</div>

	  	</div>
		</div>
	</section>

</main>

<?php snippet("footer") ?>