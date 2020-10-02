<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<main id="collections">

  <section class="tall-page-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      		<h1 class="font-huge"><?= $page->title() ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="collections-list">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <?php foreach ($page->children()->listed() as $collection): ?>
            <div class="collection-list-item link" data-url="<?= $collection->url() ?>">
              <h2 class="font-large"><?= $collection->title() ?></h2>
            </div>
            <div class="collection-prev" data-url="<?= $collection->url() ?>">
              <div class="img-cover" style="background-image: url(<?= $collection->cover()->toFile()->url() ?>);"><br/></div>
              <div class="img-cover cyan" style="background-image: url(<?= $collection->files()->filterBy("template", "cyan")->first()->url() ?>);"><br/></div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </section>

</main>

<?php snippet("footer") ?>