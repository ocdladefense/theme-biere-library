<div class="event event-today">
    <h3>at The Bière Library...</h3>
    <h2 class="event-name"><?= $event->summary ?></h2>
    <h3><?php print $start->format('l, F j, ga'); ?></h3>
    <p><?= $event->description ?></p>

    <?php foreach($attachmentUrls as $src): ?>
        <img class="calendar-attachment" src="<?= $src ?>" />
        <br />
    <?php endforeach; ?>
    <!--
    <img src="<?= $event->attachments[0]->fileUrl ?>" />
    -->
</div>