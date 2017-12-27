<?php snippet('header') ?>

  <main id="project" role="main">
    <section id='project-info'>
    	<div id='client'>
    		<div id='name'><?= $page->client() ?></div>
			<div id='project-type'><?= $page->type() ?></div>
		</div>
		<div id='project-description'><?= $page->text() ?></div>
    </section>
    <section id='project-media'>
    	<div class='img landscape'></div>
    	<div class='img portrait'></div>
    </section>
  </main>

<?php snippet('footer') ?>