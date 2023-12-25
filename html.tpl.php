<?php


?>

<!doctype html>
<html>
    <head> 
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php print getGaProperyId(); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            
            <?php if(isGaDebug()): ?>
                gtag('config', '<?php print getGaProperyId(); ?>',{'debug_mode':true});
            <?php else: ?>
                gtag('config', '<?php print getGaProperyId(); ?>');
            <?php endif; ?>
        </script>
        <title><?= $title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link rel="icon" href="<?= $themeUrl ?>/assets/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="https://library.ocdla.org/<?= $themeUrl ?>/images/favicon.ico?foo=bar" type="image/x-icon" />
        <!-- <base href="/" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;200;300;400;500&family=Nanum+Pen+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/main.css?cache=001" />
        <!-- <link rel="stylesheet" href="<?= $themeUrl ?>/css/food.css" /> -->
        <!-- <link rel="stylesheet" href="<?= $themeUrl ?>/css/drink.css" /> -->
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/menu.css" />
        <link rel="stylesheet" media="(min-width:767px)" href="<?= $themeUrl ?>/css/desktop.css" />

        <script src="https://kit.fontawesome.com/c2278a45b9.js" crossorigin="anonymous">
        </script>
    </head>

    <body <?= $body_class ?>>
        
            <?= $body ?>

            <?= $footer ?>
        </div>
    </body>



</html>