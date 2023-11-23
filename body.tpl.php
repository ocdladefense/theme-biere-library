
<?php 

    $message = getTodaysHoursMessage();
    $length = strlen($message);
    $classes = $length > 20 ? "long-message" : "";
    $classes .= " header-callout";
?>
<header>
    <a class="header-logo" href="/home">
        <img src="<?= $themeUrl ?>/assets/images/logo-white.png" style="width:150px;" />
    </a>
    <div class="<?= $classes ?>">
        <h3><?php print getTodaysHoursMessage(); ?>!</h3>
    </div>
    <?php print widget("banner"); ?>
</header>

<div id="wrapper">
    <?= $out ?> 
