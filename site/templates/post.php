<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<?php
$otehrPosts = $page->siblings()->not($page)->listed()->sortBy("postDate", "desc");
?>

<main id="post">

	<section>
	  <div class="container-fluid">
	    <div class="row">
	    	
	    	<div class="col-lg-8">
	    		<h1 class="font-huge"><?= $page->title() ?></h1>
	    		<div class="font-sans-s mb-5 pb-5">
						<?= $page->postDate()->value() ?>
						&nbsp; <?= "#". implode(", &nbsp; #", $page->tags()->split()) ?>
					</div>
	    	</div>
	    	
	    	<div class="col-lg-6">
	    		<div class="spacer my-5 py-3"></div>
	    		<div class="spacer my-5 py-3"></div>
					<div class="font-large pr-3"><?= $page->text()->kt() ?></div>
	    	</div>

	    	<div class="col-lg-6">
    			<img class="img-fluid mb-5 pb-5" src="<?= $page->cover()->toFile()->url() ?>" />
	    		<?php foreach ($page->postImages()->toFiles() as $img): ?>
	    			<img class="img-fluid mb-5 pb-5" src="<?= $img->url() ?>" />
	    		<?php endforeach ?>
	    	</div>
	    	
	    	<div class="col">
	    		<div class="spacer my-5 py-2"></div>
	    		<div class="font-large text-center">* * *</div>
	    		<div class="spacer my-5 py-2"></div>
	    	</div>

	  	</div>
		</div>
	</section>

	<!-- other posts previews -->

	<section>
	  <div class="container-fluid">
	    <div class="row">
      	<?php foreach ($otehrPosts as $post): ?>
			    <div class="col-lg-6">
	      		<?php snippet("post-preview", ["post" => $post]) ?>
			  	</div>
      	<?php endforeach ?>
	  	</div>
		</div>
	</section>

</main>

<?php snippet("footer") ?>