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
      	<?php foreach ($blogPosts as $post): ?>
      		<?php snippet("post-preview", ["post" => $post]) ?>
      	<?php endforeach ?>
	  	</div>
		</div>
	</section>

</main>

<?php snippet("footer") ?>