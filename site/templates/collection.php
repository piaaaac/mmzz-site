<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<?php 
$cover = $page->cover()->toFile();
$titleClass = $page->titleColor()->toBool() ? "color-white" : "";
$images1 = $page->images1()->toFiles();
$mood = $page->mood()->toFile();
$images2 = $page->images2()->toFiles();

$thumbOptionsFull = [
  "width" => 2000,
  "height" => null,
  "quality" => 80,
];
$thumbOptionsSmall = [
  "width" => 900,
  "height" => null,
  "quality" => 80,
];
?>

<main id="collection">

  <section class="collection-opening" style="background-image: url('<?= $cover->thumb($thumbOptionsFull)->url() ?>')">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      		<h1 class="font-huge <?= $titleClass ?>"><?= $page->title() ?></h1>
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

        <div class="col-12 spacer my-5 py-5"></div>
        <?php
        $num = $images1->count();
        $firstColNum = floor($num/2);
        $imagesCol1 = $images1->slice(0, $firstColNum);
        $imagesCol2 = $images1->slice($firstColNum);
        ?>
        <div class="col-md-6">
          <?php foreach ($imagesCol1 as $img): ?>
            <div class="two-col-img">
              <img src="<?= $img->thumb($thumbOptionsSmall)->url() ?>" />
              <?php if ($img->text()->isNotEmpty()): ?>
                <p class="caption font-sans-s"><?= $img->text()->value() ?></p>
              <?php endif ?>
            </div>
          <?php endforeach ?>
          <div class="text-container mt-5 d-none d-lg-block">
            <div class="font-large"><?= $page->text1()->kt() ?></div>
          </div>
        </div>

        <div class="col-md-6 second-col">
          <?php foreach ($imagesCol2 as $img): ?>
            <div class="two-col-img">
              <img src="<?= $img->thumb($thumbOptionsSmall)->url() ?>" />
              <?php if ($img->text()->isNotEmpty()): ?>
                <p class="caption font-sans-s"><?= $img->text()->value() ?></p>
              <?php endif ?>
            </div>
          <?php endforeach ?>
        </div>

        <?php /* V2
        <div class="col-12 img-container"></div>
        <?php foreach ($images1 as $img): ?>
          <div class="col-md-6 two-col-img">
            <img src="<?= $img->thumb($thumbOptionsSmall)->url() ?>" />
            <?php if ($img->text()->isNotEmpty()): ?>
              <p class="caption font-sans-s"><?= $img->text()->value() ?></p>
            <?php endif ?>
          </div>
        <?php endforeach ?>
        <div class="col-12"></div>
        */ ?>

        <?php /* V1
        <div class="col-12 img-container">
        	<?php foreach ($images1 as $img): ?>
        		<div class="portrait-img" 
              style="background-image: url(<?= $img->thumb($thumbOptionsSmall)->url() ?>);"
            >
              <?php if ($img->text()->isNotEmpty()): ?>
                <p class="caption font-sans-s"><?= $img->text()->value() ?></p>
              <?php endif ?>
              <br/><br/><br/>
            </div>
        	<?php endforeach ?>
        </div>
        */ ?>
        
        <!-- smaller text 1 -->

        <div class="col-lg-6 text-container d-lg-none">
        	<div class="font-large"><?= $page->text1()->kt() ?></div>
        </div>

      </div>
    </div>
  </section>

  <!-- moodboard -->
  <?php if ($page->moodTitle()->isNotEmpty()): ?>
    <div class="container-fluid">
      <div class="row pb-0">
        <div class="col-12">
          <h4 class="font-sans-m"><?= $page->moodTitle()->value() ?></h4>
        </div>
      </div>
    </div>
  <?php endif ?>
  <section class="moodboard-container" style="background-image: url(<?= $mood->thumb($thumbOptionsFull)->url() ?>"></section>

  <section>
    <div class="container-fluid">
      <div class="row">

        <?php
        $textExtists = $page->text2()->isNotEmpty();
        $imagesClass = $textExtists ? "col-md-8 offset-md-2 col-lg-4 offset-lg-2" : "col-lg-4 offset-lg-4 mt-5 pt-5";
        ?>

        <?php if ($textExtists): ?>

          <!-- smaller text 2 -->

          <div class="col-lg-6 mb-5">
          	<div class="font-large"><?= $page->text2()->kt() ?></div>
          </div>

        <?php endif ?>

        <!-- last images -->
        	
        <div class="<?= $imagesClass ?>">
        	<?php foreach ($images2 as $img): ?>
        		<img class="img-fluid w-100 mb-5" src="<?= $img->url() ?>" />
        	<?php endforeach ?>
        </div>

      </div>
    </div>
  </section>

</main>

<?php snippet("footer") ?>