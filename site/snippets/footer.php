
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

	    	<!--  
	    	<div class="col d-flex align-items-center justify-content-between">
	    		<div class="d-flex align-items-center">
		    		<span class="font-sans-s">&copy; Matilde Mozzanega 2020</span>
	    			<a class="font-sans-s d-inline-block ml-3" href="<?= page("privacy")->url() ?>"><?= page("privacy")->title() ?></a>
	    			<a class="font-sans-s d-inline-block ml-3" target="_blank" href="<?= $site->panelUrl() ?>">Login</a>
	    		</div>
	    		<div class="d-flex align-items-center">
	    			<span class="font-sans-s">Site:&nbsp;</span>
	    			<a class="font-sans-s" target="_blank" href="https://alexpiacentini.com">AP</a>
	    		</div>
	    	</div>
	    	-->

	  	</div>
		</div>
	</section>


  <script type="text/javascript"></script>
	<?= js("assets/js/index.js") ?>

</body>
</html>