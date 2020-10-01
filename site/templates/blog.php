<?php snippet("header") ?>
<?php snippet("header-bar") ?>

<?php
$blogPosts = $page->children()->listed()->sortBy("postDate", "desc");
?>

<main id="blog">

  <section class="tall-page-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      		<h1 class="font-huge"><?= $page->title() ?></h1>
        </div>
      </div>
    </div>
  </section>

	<!-- post previews -->

	<section>
	  <div class="container-fluid">
	    <div class="row">

	    	<div class="col-lg-6">
	      	<?php for ($i = 0; $i < $blogPosts->count(); $i++): ?>
	      		<?php if ($i%2 == 0) { snippet("post-preview", ["post" => $blogPosts->nth($i)]); } ?>
	      	<?php endfor ?>
	  		</div>

	    	<div class="col-lg-6">
	      	<?php for ($i = 0; $i < $blogPosts->count(); $i++): ?>
	      		<?php if ($i%2 == 1) { snippet("post-preview", ["post" => $blogPosts->nth($i)]); } ?>
	      	<?php endfor ?>
	  		</div>
	  		
	  	</div>
		</div>
	</section>

</main>

<?php snippet("footer") ?>