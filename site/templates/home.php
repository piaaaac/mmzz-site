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
	    	<div class="col-12">
	    		<img class="logo w-100" src="<?= kirby()->url('assets') ?>/images/logo.svg" />
	    	</div>
	    	<div class="col-12 d-flex justify-content-end">
					<a class="menu-item" href="<?= page("collections")->url() ?>"><?= page("collections")->title() ?></a>
					<a class="menu-item" href="<?= page("about")->url() ?>"><?= page("about")->title() ?></a>
					<a class="menu-item" href="<?= page("blog")->url() ?>"><?= page("blog")->title() ?></a>
	    	</div>
	  	</div>
		</div>
	</section>

	<section class="home-img-container">
	  <div class="container-fluid">
	    <div class="row">
      	<?php $i = 0; ?>
      	<?php $ci = 0; ?>
      	<?php foreach ($images as $img): ?>
	      	<div class="col-md-4">
        		<div class="portrait-img" style="background-image: url(<?= $img->url() ?>);"><br/><br/><br/></div>
	      	</div>
      		
      		<?php if (
      			$i == 0
      			|| $i == 4
      			|| $i == 5
      			|| $i == 12
      		): ?>
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
	    		<h2 class="font-sans-m font-600">FROM THE BLOG</h2>
	    	</div>
	    </div>
	    <div class="row">
      	<?php foreach ($blogPosts as $post): ?>
	    		<div class="col-lg-6">
      			<?php snippet("post-preview-home", ["post" => $post]) ?>
      		</div>
      	<?php endforeach ?>
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

</main>

<?php snippet("footer") ?>