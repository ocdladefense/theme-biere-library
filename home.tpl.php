

        
        <?php 
            $biereLibraryCalendarId = "c_07c922398faccc5695d450d685cccf3a2463815c4ea56ad99d709e741e9e1363";
            $josesLibraryCalendarId = "54b9c815f343ae63a171ff6afe361206457cf4c59e97a22b53165c981f98f0ab";
            $today = explode("T",date('c'))[0];
            $timeMax = (new DateTime($today))->modify('+3 day');
            $end = explode("T",date_format($timeMax,'c'))[0];

            $params = array(
                "timeMin" => $today,
                "timeMax" => $end,
                "maxResults" => 3
            );

            // var_dump($params);exit;
            $events = getEvents($josesLibraryCalendarId, $params);

            if(null == $events || count($events) == 0):
            
            else:
        ?>
                <div class="cheers" style="padding-right: 50px;">
                    <h1>Upcoming Bière Library Events</h1>

                    
                    <h2>The Bière Library Happy Hour... Everyday!</h2>
                    <h3>Daily, 2&mdash;5pm</h3>
                    <p>$1 off drafts, frites, brussel sprouts, paprika chips.</p>
        <?php
                foreach($events as $event): 

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
                    <h2 class="event-name"><?= $event->summary ?></h2>
                    <h3><?php print $start->format('l, F j, ga'); ?></h3>
                <?php endforeach; ?>
                    <p>
                        <a href="/events">Details</a> | <a href="/location">Location</a>
                    </p>
                </div>
            <?php endif; ?>




    
    <section>

        <h2>Inside & Patio Dining</h2>
        <p>BL DINING SHOT (INSIDE) FS</p>
        <p>COPY EXAMPLE: Enjoy Belgian comfort food and fine draught beers and cocktails in our comfortable dining area, or Bière Library bar.  Or enjoy the patio, beautiful Oregon days adjacent to Corvallis' Riverfront Commemorative Park.</p>
        <h2>The Patio</h2>
        <p>BL DINING SHOT (PATIO) FS</p>
        <p>BL Patio copy: waterfront and commemorative park.  Drink descriptions.</p>
        <button><a class="bl-button" href="/food">Food</a></button>
        <button><a class="bl-button" href="/drink">Drinks</a></button>
    </section>



    <section>

        <h2>From the Bar</h2>
        <p>BL BAR SHOT FS</p>
        <p>BL BAR copy: Drafts and popular drink descriptions. Happy hour callout.  Popular food choices.</p>
        <h2>Draughts</h2>
        <p>BL BAR copy: Drafts and popular drink descriptions. Happy hour callout.  Popular food choices.</p>
        <button><a class="bl-button" href="/drink">Drinks</a></button>
    </section>





    <section>

        <h2>From the bottle shop</h2>
        <p>BL BOTTLES-CANS SHOT FS</p>

        <button><a class="bl-button" href="/drink">Bottles & Cans</a></button>
    </section>



    <section>

        <h2>Belgian Street Food Inspired</h2>

        <img class="circle" src="<?= $themeUrl ?>/assets/images/frites.jpg" />
        <div class="grid">
            <p class="content">
                Inspired by Belgian street food and Erica's family recipes, Chef Travis has created a menu based on simple flavors that pair well with beer. Sweet and savory crêpes are a staple, as well as house-made soups and stews, cheese &amp; charcuterie boards, sandwiches, meat &amp; potatoes, and rotating specials. And of course, Belgian frites!
            </p>
            <p class="actions">
                <button>Food Menu</button>
            </p>
        </div>

    </section>



