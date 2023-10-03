


<div style="border: 1px solid #fff; padding: 25px;">
    <h2 class="cheers" style="border: 1px solid transparent !important;">The Bière Library Happy Hour... Everyday!</h2>
    <h3>Daily, 2&mdash;5pm</h3>
    <p>$1 off drafts, frites, brussel sprouts, paprika chips.</p>

    <p>
        <a target="_new" href="https://www.facebook.com/thebierelibrary" style="cursor: pointer; margin-right: 20px;">
            <i class="fa-brands fa-facebook-f fa-2xl"></i>
        </a>
    
        <a target="_new" href="https://www.instagram.com/thebierelibrary/" style="cursor: pointer;">
            <i class="fa-brands fa-instagram fa-2xl"></i>
        </a>
    </p>
</div>

<h3>See our calendar of events, below!</h3>

<h1>Events</h1>


<?php 

    $today = explode("T",date('c'))[0];
    $todayDay = date('l');
    $timeMax = (new DateTime($today))->modify('+15 day');
    $end = explode("T",date_format($timeMax,'c'))[0];

    $params = array(
        "timeMin" => $today,
        "timeMax" => $end,
        "maxResults" => 30 // Need to accommodate multiple happy hour entries.
    );
    print getUpcomingEvents(getSitePrimaryCalendarId(), $params);
?>


<h2>Bière Library Events</h2>



<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23A79B8E&ctz=America%2FLos_Angeles&showTz=0&showCalendars=0&showTabs=1&showPrint=0&showTitle=1&mode=AGENDA&src=Y18wN2M5MjIzOThmYWNjYzU2OTVkNDUwZDY4NWNjY2YzYTI0NjM4MTVjNGVhNTZhZDk5ZDcwOWU3NDFlOWUxMzYzQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F4511E" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<!--
<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23795548&ctz=America%2FLos_Angeles&showCalendars=0&showTabs=1&showNav=1&showTitle=1&mode=AGENDA&src=NTRiOWM4MTVmMzQzYWU2M2ExNzFmZjZhZmUzNjEyMDY0NTdjZjRjNTllOTdhMjJiNTMxNjVjOTgxZjk4ZjBhYkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->