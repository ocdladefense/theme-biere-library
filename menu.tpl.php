<?php


$items = getDraftBeerList();

?>



<section class="has-menu-background">

    <span class="menu-title">drinks</span>

    <div class="table-format">
    <?php foreach($items as $draft): ?>
        <ul class="table-row">
            <li class="table"><?= $draft["name"] ?></li>
            <li class="table"><?= $draft["abv"] ?>%</li>
            <li class="table"><?= $draft["glass"] ?></li>
            <li class="table"><?= $draft["price"] ?></li>
            <li class="table"><?= $draft["brewer"] ?></li>
        </ul>
    <?php endforeach; ?>
    </div>
</section>