<footer>
    <style type="text/css">
        .fa-brands {
            color: #fff;
        }
    </style>
        <div class="row three-columns">
            <div class="column footer-panel">
                <a href="/home">
                    <img src="<?= $themeUrl ?>/assets/images/logo-white.png" style="width:100px;" />
                </a>
            </div>
            <div class="column footer-panel">
                <a target="_new" href="https://www.facebook.com/thebierelibrary">
                    <i class="fa-brands fa-facebook-f fa-2xl"></i>
                </a>
            </div>

            <div class="column footer-panel">
                <a target="_new" href="https://www.instagram.com/thebierelibrary/">
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </a>
            </div>
    </div>

    <div class="row three-columns">
        <div class="column footer-panel">
            <h3><a class="dotted" href="/about#erica-baze">Erica Baze</a></h3>
            Owner/General Manager<br />
            <h3><a class="dotted" href="/about#travis-allen">Travis Allen</a></h3>
            Owner/Chef
        </div>

        <div class="column footer-panel">
            <h3>Hours</h3>
            Sunday, <?php print getHours("Sunday"); ?><br />
            Monday, <?php print getHours("Monday"); ?><br />
            Tuesday, <?php print getHours("Tuesday"); ?><br />
            Wednesday-Saturday, <?php print getHours("Wednesday"); ?>
        </div>


        <div class="column footer-panel">
            <h3>Contact</h3>
            <a href="/home">The Bière Library</a><br />
            <a target="_new" href="https://goo.gl/maps/y1hQDKewNhHS9V7H7">151 NW Monroe Ave, Suite 102<br />
            Corvallis, Oregon 97331</a><br />
            Phone: <a target="_new" href="tel:5412864193">541-286-4193</a><br />
            Email: <a target="_new" href="mailto:info@thebierelibrary.com">info@thebierelibrary.com</a>
        </div>

    </div>
</footer>