<nav id="menu">
  <div class="container-fluid h-100 d-flex justify-content-between align-items-center">
		<div>
			<!-- <img class="logo" src="<?= kirby()->url('assets') ?>/images/logo.svg" /> -->
			<a class="font-m" href="<?= $site->url() ?>">&Ouml;MMZZ</a>
		</div>
		<div>
			<a class="menu-item" href="<?= page("collections")->url() ?>"><?= page("collections")->title() ?></a>
			<a class="menu-item" href="<?= page("about")->url() ?>"><?= page("about")->title() ?></a>
			<a class="menu-item" href="<?= page("blog")->url() ?>"><?= page("blog")->title() ?></a>
		</div>
	</div>
</nav>