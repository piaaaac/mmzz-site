<?php snippet("header") ?>

<?php
$images = $page->images()->filterBy("template", "home")->sortBy("sort");
$cyanImages = new Files();
foreach (page("collections")->children()->listed() as $collection) {
  $cyanImages->add($collection->files()->filterBy("template", "cyan")/*->toFile()*/);
}
$cyanImages = $cyanImages->shuffle();

// kill($cyanImages);
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

$showHighlight = ($page->highlight()->toBool() === true) 
              && ($page->highlightImage()->isNotEmpty())
              && ($page->highlightText()->isNotEmpty())
              && ($page->highlightButtonText()->isNotEmpty())
              && ($page->highlightButtonUrl()->isNotEmpty());

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
        <div class="position-relative">
          <!-- <img class="logo" src="<?= kirby()->url('assets') ?>/images/logo.svg" /> -->
          <a id="home-small-logo" class="font-m" href="<?= $site->url() ?>"><?= randomLogo() ?></a>
          <span id="home-small-name" class="font-m d-none d-md-inline">Matilde&nbsp;Mozzanega&nbsp;Jewellery</span>
        </div>
        <div>
          <a class="menu-item" href="<?= page("collections")->url() ?>"><?= page("collections")->title() ?></a>
          <a class="menu-item" href="<?= page("about")->url() ?>"><?= page("about")->title() ?></a>
          <a class="menu-item" href="<?= page("blog")->url() ?>"><?= page("blog")->title() ?></a>
        </div>
      </div>
    </nav>

  </section>

  <?php if ($showHighlight): 
    $highlightImageUrl = $page->highlightImage()->toFile()->thumb(800)->url();
    ?>
    <section class="home-highlight">
      <div class="spacer py-5"></div>
      <div class="spacer py-5"></div>
      <div class="spacer d-none d-lg-block py-5"></div>
      <div class="container-fluid">
        <div class="row align-items-end pb-5">
          <div class="col-lg-6 lh-0">
            <img class="full-w" src="<?= $highlightImageUrl ?>" />
          </div>   
          <div class="col-lg-6">
            <div class="home-highlight-text mt-4 pt-2"><?= $page->highlightText()->kt() ?></div>
            <p class="font-large my-0"><a class="button large" href="<?= $page->highlightButtonUrl()->value() ?>"><?= $page->highlightButtonText()->value() ?></a></p>
          </div>   
        </div>   
      </div>   
    </section>
  <?php endif ?>

  <section class="home-img-container">
    <div class="container-fluid">
      <div class="row">
        <?php foreach ($imgArray as $item): ?>

          <?php 
          $type =       $item["type"];
          $imgUrl =     $type != "empty" ? $item["img"]->url() : "none";
          $class =      $type == "cyan" ? "cyan-img" : ($type == "portrait-img" ? "portrait-img link" : "empty");
          $margin =     $type == "empty" ? "" : "margin";
          $collection = $type == "portrait-img" ? $item["img"]->collection()->toPages()->first() : "";
          $linkUrl    = $type == "portrait-img" ? $collection->url() : "";
          $text =       $type == "portrait-img" ? (
                          $item["img"]->text()->isNotEmpty()
                            ? $item["img"]->text()->value()
                            : $collection->title()) : "";
          ?>

          <div class="col-md-4 <?= $margin ?>">
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
          <!-- <h2 class="font-sans-m font-600">FROM THE BLOG</h2> -->
          <h2 class="font-m">FROM THE BLOG</h2>
          <!-- <h2 class="font-large mb-3">From the blog</h2> -->
          <!-- <hr /> -->
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