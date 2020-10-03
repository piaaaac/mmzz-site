<?php snippet("header") ?>

<?php
$images = $page->images()->sortBy("sort");
$cyanImages = new Files();
foreach (page("collections")->children()->listed() as $collection) {
	$cyanImages->add($collection->files()->filterBy("template", "cyan")/*->toFile()*/);
}
$cyanImages = $cyanImages->shuffle();
$cyanPositions = [1, 5, 6, 13/*, 17, 18*/];
$emptyPositions = [15];
$imgArray = [];
$i = 0;
$ii = 0;
$ic = 0;
while ($ii < $images->count()) {
	if (in_array($i, $cyanPositions)) {
		if ($ic >= $cyanImages->count()) {
			$cyanImages = $cyanImages->shuffle();
			$ic = 0;
		}
		$imgArray[] = ["img" => $cyanImages->nth($ic), "type" => "cyan"];
		$ic++;
	} elseif (in_array($i, $emptyPositions)) {
		$imgArray[] = ["img" => "", "type" => "empty"];
		$ic++;
	} else {
		$imgArray[] = ["img" => $images->nth($ii), "type" => "portrait-img"];
		$ii++;
	}
	$i++;
}
// kill($imgArray);

$blogPosts = $page->blogPosts()->toPages();
?>

<main id="home">

	<section class="home-opening">
	  <div class="container-fluid">
	    <div class="row py-0">
	    	<div class="col-12">
	    		<img class="logo w-100" src="<?= kirby()->url('assets') ?>/images/logo.svg" />
	    	</div>
    	</div>
  	</div>

		<nav id="menu-home">
		  <div class="container-fluid h-100 d-flex justify-content-between align-items-center">
				<div>
					<!-- <img class="logo" src="<?= kirby()->url('assets') ?>/images/logo.svg" /> -->
					<a id="home-small-logo" class="font-m" href="<?= $site->url() ?>"><?= randomLogo() ?></a>
				</div>
				<div>
					<a class="menu-item" href="<?= page("collections")->url() ?>"><?= page("collections")->title() ?></a>
					<a class="menu-item" href="<?= page("about")->url() ?>"><?= page("about")->title() ?></a>
					<a class="menu-item" href="<?= page("blog")->url() ?>"><?= page("blog")->title() ?></a>
				</div>
			</div>
		</nav>

	</section>

	<!--  
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
	-->

	<section class="home-img-container">
	  <div class="container-fluid">
	    <div class="row">
      	<?php foreach ($imgArray as $item): ?>

      		<?php 
      		$type = 			$item["type"];
      		$imgUrl = 		$type != "empty" ? $item["img"]->url() : "none";
      		$class = 			$type == "cyan" ? "cyan-img" : ($type == "portrait-img" ? "portrait-img link" : "empty");
      		$collection = $type == "portrait-img" ? $item["img"]->collection()->toPages()->first() : "";
      		$linkUrl    = $type == "portrait-img" ? $collection->url() : "";
      		$text = 			$type == "portrait-img" ? (
      										$item["img"]->text()->isNotEmpty()
      											? $item["img"]->text()->value()
      											: $collection->title()) : "";
      		?>

	      	<div class="col-md-4">
        		<div class="<?= $class ?>" data-url="<?= $linkUrl ?>"
        				 style="background-image: url(<?= $imgUrl ?>);">
				  		<?php if ($type == "portrait-img"): ?>
  				  		<h3 class="hover-text"><?= $text ?></h3>
				  		<?php endif ?>
  				  </div>
	      	</div>
      		
      	<?php endforeach ?>
	    </div>
	  </div>
	</section>

	<!-- blog preview -->

	<section class="blog-preview">
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