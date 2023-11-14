<div class="event event-today">
    <h3>at The Bière Library...</h3>
    <h2 class="event-name"><?= $event->summary ?></h2>
    <h3><?php print $start->format('l, F j, ga'); ?></h3>
    <p><?= $event->description ?></p>

    <?php foreach($attachments as $attachment): ?>
        <?php if($attachment->isImage): ?>
            <img class="calendar-attachment" src="<?= $attachment->embedUrl ?>" />
        <?php else: ?>
            <h2><?= $attachment->title ?></h2>
            <iframe width="100%" height="800" src="<?= $attachment->embedUrl ?>"></iframe>

        <?php endif; ?>

        <br />
    <?php endforeach; ?>
    <!--
    <img src="<?= $event->attachments[0]->fileUrl ?>" />
    -->
</div>