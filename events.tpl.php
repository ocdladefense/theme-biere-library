<?php
use Http\Http;
use Http\HttpRequest;
use Http\HttpResponse;


// var_dump($results->getItems());
$biereLibraryCalendarId = "c_07c922398faccc5695d450d685cccf3a2463815c4ea56ad99d709e741e9e1363";
$josesLibraryCalendarId = "54b9c815f343ae63a171ff6afe361206457cf4c59e97a22b53165c981f98f0ab";

$events = getEvents($josesLibraryCalendarId);
?>




<div class="cheers">
    <h2>The Bière Library Happy Hour... Everyday!</h2>
    <h3>Daily, 2&mdash;5pm</h3>
    <p>$1 off drafts, frites, brussel sprouts, paprika chips.</p>
</div>


<?php if(null == $events || count($events) == 0): ?>

    <h3>See our calendar of events, below!</h3>
    
<?php else: ?>

    <h1>Events</h1>
    <h3>at The Bière Library</h3>

    <?php foreach($events as $event):


        /*
        // The unique event id for this event.
        $event->id;

        // public 'kind' => string 'calendar#event
        $event->kind;

        // The location for the event.
        $event->location;

        // Not sure what this is.
        $event->recurringEventId;

        // Name of the event.
        $event->summary;
        */
        if("Happy Hour!" == $event->summary) continue;

        // Extended description of the event.  Can include HTML.
        $event->description;

        // Google\Service\Calendar\EventDateTime type.
        $start = $event->start;
        $startDate = $start->date;
        $startTime = $start->dateTime;
        // $startTimezone = $start->timezone;

        // Google\Service\Calendar\EventDateTime
        $end = $event->end;
        $endDate = $end->date;
        $endTime = $end->dateTime;
        // $endTimezone = $end->timezone;



        // Link to the Google Calendar application for this event.
        $event->htmlLink;
        $start = empty($start) ? $event->start->date : $event->start->dateTime;
        $start = new DateTime($start);
        ?>
    
        
        <div class="event event-today">
            <h2 class="event-name"><?= $event->summary ?></h2>
            <h3><?php print $start->format('l, F j, ga'); ?></h3>
            <p><?= $event->description ?></p>
        </div>


    <?php endforeach; ?>

<?php endif; ?>
<h2>Bière Library Events</h2>



<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23A79B8E&ctz=America%2FLos_Angeles&showTz=0&showCalendars=0&showTabs=1&showPrint=0&showTitle=1&mode=AGENDA&src=Y18wN2M5MjIzOThmYWNjYzU2OTVkNDUwZDY4NWNjY2YzYTI0NjM4MTVjNGVhNTZhZDk5ZDcwOWU3NDFlOWUxMzYzQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F4511E" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<!--
<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23795548&ctz=America%2FLos_Angeles&showCalendars=0&showTabs=1&showNav=1&showTitle=1&mode=AGENDA&src=NTRiOWM4MTVmMzQzYWU2M2ExNzFmZjZhZmUzNjEyMDY0NTdjZjRjNTllOTdhMjJiNTMxNjVjOTgxZjk4ZjBhYkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->