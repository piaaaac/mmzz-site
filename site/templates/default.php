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

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?= $page->text()->kt() ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php snippet("footer") ?>