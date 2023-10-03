
<div class="event">
    <h2 class="event-name">
        <?php print getAgendaDay($start); ?>, <?= $event->summary ?>
    </h2>
    <p><?php print $start->format('l, F j, ga'); ?>, <?= $event->description ?></p>
</div>