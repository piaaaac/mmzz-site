<?php
snippet("header");

$coverUrl = $page->cover()->toFile()->url();
$images1 = [];
?>

<section class="">
  <div class="container-fluid">
    <div class="row">

      <div class="col-12">
      	<img class="img-fluid" src="<?= $coverUrl ?>" />
      </div>

      <div class="col-12">
      	<p class="font-huge"><?= $page->introText()->kti() ?></p>
      </div>

      <div class="col-lg-6">
      	<div class="font-large"><?= $page->text1()->kt() ?></div>
      </div>
      <div class="col-lg-6">
      	
      </div>

    </div>
  </div>
</section>