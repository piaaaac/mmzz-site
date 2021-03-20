
	<section class="footer">
	  <div class="container-fluid">
	    <div class="row my-0 py-0">
	    	<div class="col d-flex align-items-center justify-content-start">
	    		<span class="font-sans-s">&copy; Matilde Mozzanega 2020</span>
    			<a class="font-sans-s d-inline-block ml-3" href="<?= page("privacy")->url() ?>"><?= page("privacy")->title() ?></a>
    			<a class="font-sans-s d-inline-block ml-3" target="_blank" href="<?= $site->panelUrl() ?>">Login</a>
    			<span class="font-sans-s ml-3">Site by&nbsp;</span>
    			<a class="font-sans-s" target="_blank" href="https://alexpiacentini.com">Alex Piacentini</a>
	    	</div>
	  	</div>
		</div>
	</section>

	<?php /*** DEBUG *** Get all image sizes

	<?php foreach (page("collections")->children() as $p): 
		$images = $p->images1()->toFiles()->add($p->images2()->toFiles());
		?>
		<h2><?= $p->title() ?></h2>
		<?php foreach ($images as $file): ?>
			<p><?= $file->filename() .": ". round($file->size()/1024*100)/100 ?></p>
		<?php endforeach ?>
	<?php endforeach ?>
	
	*/ ?>

  <script type="text/javascript"></script>
	<?= js("assets/js/index.js") ?>

</body>
</html>