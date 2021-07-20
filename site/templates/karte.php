<?php snippet('header') ?>

    <h2><?= $page->title() ?></h2>

    <ul id="speisekarte" class="unstyled">
        <?php foreach($page->children()->listed() as $item): ?>
        <li>
          <h3><?= $item->title() ?></h3>
          <p class="price"><?= $item->price() ?>.—</p>
          <p class="details"><?= $item->details() ?></p>
          <?php if ($item->vegan()->toBool() === true) : ?>
          <small class="vegan">Vegan</small> 
          <?php endif ?>
        </li>
        <?php endforeach ?>
      </ul>

<?php snippet('footer') ?>