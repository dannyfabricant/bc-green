<?php snippet('header') ?>

  <main id="<?= $page->title()->lower() ?>" role="main">

    <section id='intro'>
        <div class='headline large-text-block'>
          <?= $page->intro()->kirbytext() ?>
        </div>
    </section>

    <section id='clients'>
      <div class="info-block">
        <div class='left'>
          <div class='title'>Clients:</div>
        </div>
        <div class='right'>
          <?php foreach ($page->clients()->yaml() as $client):?>
            <div class='client'>
              <span class='name'><?= $client ?></span>
              <div class='dot'></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="info-block">
        <div class='left'>
          <div class='title'>Services:</div>
        </div>
        <div class='right'>
          <?php foreach ($page->services()->yaml() as $client):?>
            <div class='client'>
              <span class='name'><?= $client ?></span>
              <div class='dot'></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>