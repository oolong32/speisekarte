<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>
  <?= css("assets/css/style.css") ?>
</head>
<body>
    <h1><a class="un-deco" href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>

    <nav>
      <ul class="unstyled">
        <?php foreach($site->children()->listed() as $item): ?>
        <li><a class="un-deco" href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>