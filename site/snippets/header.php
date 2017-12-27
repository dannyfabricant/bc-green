<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/style.css') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <a href='<?= $site->url() ?>' id='name'>
      <span>BC &amp; Green</span>
      <div class='cursor'></div>
    </a>
    <div id='pages'>
      <?php foreach ($pages->visible() as $p):
        $title = $p->title();
        $url = $p->url();
        $current = $page->title();
        if($current == 'Home'){
          $current = 'Work';
        }
      ?>
        <a class='page <?php if($title == $current){echo 'current';} ?>' href="<?= $url ?>"><?= $title ?></a>
      <?php endforeach; ?>
    </div>
  </header>


