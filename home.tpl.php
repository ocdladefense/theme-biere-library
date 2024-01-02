

<section class="first">
    
    <p>The Bière Library is a craft beer bar and restaurant serving Corvallis, Oregon. Inspired by the beer and cuisine of Belgium, The Bière Library explores the relationship between beer and food in an environment reminiscent of a comfortable library.</p>
    
    <a class="bl-button" href="/food">Food Menu</a>
    <a class="bl-button" href="/drink">Drink Menus</a>
    <br />
    <div style="margin-top:15px;">
    <img class="circle" src="<?= $themeUrl ?>/assets/images/plated-1.jpg" />
    <img class="circle" src="<?= $themeUrl ?>/assets/images/plated-2.jpg" />
    </div>

    <p>Check out our <a class="dotted" href="/food#dietary-options">gluten-free and vegetarian food &amp; drink options</a>.</p>

    <p>The Bière Library is an all-ages venue!  Alcohol 21+.</p>
    <p>
        <a target="_new" href="https://www.facebook.com/thebierelibrary" style="cursor: pointer; margin-right: 20px;">
            <i class="fa-brands fa-facebook-f fa-2xl"></i>
        </a>

        <a target="_new" href="https://www.instagram.com/thebierelibrary/" style="cursor: pointer;">
            <i class="fa-brands fa-instagram fa-2xl"></i>
        </a>
    </p>
</section>

<div style="border:1px solid #fff; padding: 25px;">
    <h1 class="cheers" style="border: 0px solid transparent !important;">Bière Library Events</h1>

    <?php if(!isOpenToday()):
        $nextOpenDate = getNextOpenDate();
        $nextOpenDay = $nextOpenDate->format("l");
    ?>

        <h3>We're closed today, but join us <?php print $nextOpenDay; ?> from <?php print getHours($nextOpenDay); ?>.</h3>

    <?php else: ?>
        <p>Open today, <?php print getTodaysHours(); ?></p>
        <!-- <h2>The Bière Library Happy Hour... Everyday!</h2> -->
        <div class="event event-short">
            <h2>Today, Happy Hour!</h2>
            <p>Daily, 2pm&mdash;5pm, $1 off drafts, frites, brussel sprouts &amp; paprika chips.</p>
        </div>
    <?php endif; ?>

    <?php 
        print renderEventComponent("FeaturedEvents");
        print renderEventComponent("UpcomingEventsHomepage");
    ?>

    <p>
        <a href="/events">Details</a> | <a href="/about">Location</a>
    </p>
        
</div>





<section>

    <h1>Indoor &amp; Patio Dining</h1>
    <!-- <img class="circle" src="<?= $themeUrl ?>/assets/images/indoor-dining.jpg" />-->
    <img class="circle" src="<?= $themeUrl ?>/assets/images/indoor-dining-1.jpg" />
    <!-- BL DINING SHOT (INSIDE) FS -->
    <p>Join us in our cozy and comfortable space to celebrate or study, alone or in a group.</p>
    <br />
    <a class="bl-button" href="/food">Food Menu</a>
    <a class="bl-button" href="/drink">Drink Menus</a>
</section>


<section>
    <h1>The Patio</h1>
    <div id="patio">&nbsp;</div>

    <img class="circle" src="<?= $themeUrl ?>/assets/images/patio-2.jpg" />
    <img class="circle" src="<?= $themeUrl ?>/assets/images/patio-night-shot.jpg" />
    <!-- BL DINING SHOT (PATIO) FS -->
    <p>The Bière Library restaurant and patio are situated adjacent to Corvallis' picturesque Commemorative Waterfront Park and the Willamette River.  Enjoy the view from inside or outside.  Dogs welcome outside!</p>
    <a class="bl-button" href="/food">Food Menu</a>
    <a class="bl-button" href="/drink">Drink Menus</a>
</section>



<section>

    <h1>The Bar</h1>
    <img class="circle" src="<?= $themeUrl ?>/assets/images/bar-1.jpg" />
    <!-- BL BAR SHOT FS -->
    <p>Literary-themed cocktails, rotating drink specials, sipping spirits, aperitifs &amp; digestifs.</p>
    </section>

    <section>
    <h1>On Draft</h1>
    <img class="circle" src="<?= $themeUrl ?>/assets/images/drafts-1.jpg" />
    <p>A well-curated selection of local craft and import beer rotate frequently on draft and in bottles, with an emphasis on quality and diversity of styles.  Tasters, flights and half-pours available.</p>
    <br />
    <!-- BL BAR copy: Drafts and popular drink descriptions. Happy hour callout.  Popular food choices. -->
    <a class="bl-button" href="/drink">Beer Menu</a>
    <a class="bl-button" href="/drink">Wine &amp; Cocktails</a>
</section>





<section>

    <h1>The Bottle Shop</h1>
    <img class="circle" src="<?= $themeUrl ?>/assets/images/bottle-shop.jpg" />
    <!-- BL BOTTLES-CANS SHOT FS -->
    <p>The Bière Library carries a variety of bottles and cans in an assortment of styles. Explore classic Belgian beers next to new world interpretations, indulge in the best of the Northwest's IPAs, or kick back with a bright, refreshing lager.  Available for here or to go.</p>
    <br />
    <a class="bl-button" href="/drink">Bottles &amp; Cans Menu</a>
</section>



<section>

    <h1>Belgian Comfort Food Inspired</h1>

    <img class="circle" src="<?= $themeUrl ?>/assets/images/frites.jpg" />
    <div class="grid">
        <p class="content">
            The Bière Library menu features Belgian comfort food, described by Chef Travis as a cross between traditional German food portions and the refinement of French cooking techniques. Sweet and savory crêpes are a staple, as well as sandwiches, house-made soups and stews, cheese &amp; charcuterie boards, and rotating specials and more. And of course, Belgian frites!
        </p>
        
            <a class="bl-button" href="/food">Food Menu</a>
        
    </div>

</section>



