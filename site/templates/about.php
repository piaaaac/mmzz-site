<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<main id="about">

  <section class="tall-page-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      		<h1 class="font-huge"><?= $page->title() ?></h1>
        </div>
      </div>
    </div>
  </section>

	<!-- intro text -->

	<section class="mb-5 pb-5">
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col">
	    		<h2 class="font-huge"><?= $page->introText()->kti() ?></h2>
	    	</div>
	  	</div>
		</div>
	</section>

	<!-- text -->

	<section>
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col-lg-6 mb-5">
	    		<div class="font-large"><?= $page->text()->kt() ?></div>
	    	</div>
	    	<div class="col-lg-4 offset-lg-2">
	    		<img class="img-fluid mb-3" src="<?= $page->profileImage()->toFile()->url() ?>" />
	    		<div class="bio-lists"><?= $page->textSmall()->kt() ?></div>
	    	</div>
	    </div>
		</div>
	</section>

</main>

<?php snippet("footer") ?>