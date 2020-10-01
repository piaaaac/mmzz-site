<?php snippet("header") ?>

<?php
$cyanImages = new Files();
foreach (page("collections")->children()->listed() as $collection) {
	$cyanImages->add($collection->files()->filterBy("template", "cyan")/*->toFile()*/);
}
$cyanImages = $cyanImages->shuffle();
$images = $page->images()->sortBy("sort");
$blogPosts = $page->blogPosts()->toPages();
?>

<main id="home">

	<section class="home-opening">
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col">
	    		<img class="logo w-100" src="<?= kirby()->url('assets') ?>/images/logo.svg" />
	    	</div>
	  	</div>
		</div>
	</section>

	<section>
	  <div class="container-fluid">
	    <div class="row">
      	<?php $i = -3; ?>
      	<?php $ci = 0; ?>
      	<?php foreach ($images as $img): ?>
	      	<div class="col-md-4">
        		<div class="portrait-img" style="background-image: url(<?= $img->url() ?>);"><br/><br/><br/></div>
	      	</div>
      		
      		<?php if ($i%3 == 0): ?>
      			<?php
      			if ($ci >= $cyanImages->count()) {
      				$cyanImages = $cyanImages->shuffle();
      				$ci = 0;
      			}
      			$cyan = $cyanImages->nth($ci);
      			$ci++;
      			?>
    				<div class="col-md-4">
      				<div class="cyan-img" style="background-image: url(<?= $cyan->url() ?>);"><br/><br/><br/></div>
      			</div>
      		<?php endif ?>

      		<?php $i++; ?>
      	<?php endforeach ?>
	    </div>
	  </div>
	</section>

	<!-- blog preview -->

	<section>
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col">
	      	<?php foreach ($blogPosts as $post): ?>
	      		<?php snippet("blog-post-prev", ["post" => $post]) ?>
	      	<?php endforeach ?>
	    	</div>
	  	</div>
		</div>
	</section>

	<!-- intro sentence -->

	<section>
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col">
	    		<h2 class="font-huge"><?= $page->text()->kti() ?></h2>
	    	</div>
	  	</div>
		</div>
	</section>

</div>

<?php snippet("footer") ?>