<?php snippet("header") ?>

<?php 
$cover = $page->cover()->toFile();
$images1 = $page->images1()->toFiles();
$mood = $page->mood()->toFile();
$images2 = $page->images2()->toFiles();
?>

<main id="collection">

  <section class="collection-opening" style="background-image: url(<?= $cover->url() ?>">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      		<h1 class="font-huge"><?= $page->title() ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="gradient-bknd">
    <div class="container-fluid">
      <div class="row">
        
        <!-- intro text -->

        <div class="col-12">
        	<p class="font-huge"><?= $page->introText()->kti() ?></p>
        </div>

        <!-- 2 cols images -->

        <div class="col-12 img-container">
        	<?php foreach ($images1 as $img): ?>
        		<div class="portrait-img" style="background-image: url(<?= $img->url() ?>);"><br/><br/><br/></div>
        	<?php endforeach ?>
        </div>
        
        <!-- smaller text 1 -->

        <div class="col-6 text-container">
        	<div class="font-large"><?= $page->text1()->kt() ?></div>
        </div>

        <!-- moodboard -->

        <div class="col-12 moodboard-container">
        	<div class="moodboard" style="background-image: url(<?= $mood->url() ?>"><br/><br/><br/></div>
        </div>

        <!-- smaller text 2 -->

        <div class="col-lg-6">
        	<div class="font-large"><?= $page->text2()->kt() ?></div>
        </div>

        <!-- last images -->
        	
        <div class="col-lg-4 offset-lg-2">
        	<?php foreach ($images2 as $img): ?>
        		<img class="img-fluid w-100 mb-5" src="<?= $img->url() ?>" />
        	<?php endforeach ?>
        </div>

      </div>
    </div>
  </section>

</main>

<?php snippet("footer") ?>