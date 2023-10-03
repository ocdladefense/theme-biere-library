<div class="event event-today">
    <h2 class="event-name"><?= $event->summary ?></h2>
    <h3><?php print $start->format('l, F j, ga'); ?></h3>
    <p><?= $event->description ?></p>
</div>