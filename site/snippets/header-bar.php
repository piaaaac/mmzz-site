<nav id="menu">
  <div class="container-fluid h-100 d-flex justify-content-between align-items-center">
		<div>
			<!-- <img class="logo" src="<?= kirby()->url('assets') ?>/images/logo.svg" /> -->
			<a class="font-m logo" href="<?= $site->url() ?>"><?= randomLogo() ?></a>
		</div>
		<div>
			
			<?php $p = page("collections"); $active = $page->parents()->add($page)->has($p); ?>
			<a class="menu-item<?= $active ? " active" : "" ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
			
			<?php $p = page("about"); $active = $page->parents()->add($page)->has($p); ?>
			<a class="menu-item<?= $active ? " active" : "" ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
			
			<?php $p = page("blog"); $active = $page->parents()->add($page)->has($p); ?>
			<a class="menu-item<?= $active ? " active" : "" ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
			
		</div>
	</div>
</nav>