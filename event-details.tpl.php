<?php 
    print renderEventComponent("EventInfo", $event);
?>



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

<h3>View our <a class="dotted" href="#embedded-calendar">complete calendar of events</a>, below!</h3>

<h1 id="featured-events" style="margin-top:60px;">Featured Events</h1>

<p>See all <a class="dotted" href="#upcoming-events">upcoming events</a>.</p>
<?php 
    print renderEventComponent("FeaturedEvents");
?>

<h1 id="upcoming-events" style="margin-top:60px;">Upcoming Events</h1>

<p>See our <a class="dotted" href="#featured-events">featured events</a>, too.</p>
<?php 
    print renderEventComponent("UpcomingEvents");
?>