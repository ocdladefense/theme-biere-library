<?php


?>

<!doctype html>
<html>
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="https://library.ocdla.org/<?= $themeUrl ?>/images/favicon.ico?foo=bar" type="image/x-icon" />
        <base href="/" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;200;300;400;500&family=Nanum+Pen+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/@ocdladefense/modal/src/css/loading.css" />
        <link rel="stylesheet" href="node_modules/@ocdladefense/modal/src/css/modal.css" />
        <link rel="stylesheet" href="node_modules/@ocdladefense/modal/src/css/inline-modal.css" />
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/main.css" />
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/food.css" />
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/drink.css" />
        <link rel="stylesheet" href="<?= $themeUrl ?>/css/menu.css" />
        <link rel="stylesheet" media="(min-width:767px)" href="<?= $themeUrl ?>/css/desktop.css" />

        <script src="https://kit.fontawesome.com/c2278a45b9.js" crossorigin="anonymous">
        </script>
    </head>

    <body <?= $route ?>>
        
            <?= $body ?>

            <?= $footer ?>
        </div>
    </body>

    <!-- 
        <script type="module">

            // https://medium.com/streak-developer-blog/the-complexities-of-implementing-inline-autocomplete-for-content-editables-e358c0ed504b
            import {WebcEvents} from "./node_modules/@ocdladefense/webc-events/dist/WebcEvents.js";
            import "./node_modules/@ocdladefense/html/html.js";
            import domReady from "./node_modules/@ocdladefense/web/src/web.js";
            // https://medium.com/streak-developer-blog/the-complexities-of-implementing-inline-autocomplete-for-content-editables-e358c0ed504b

            // customElements.define("word-count", WordCount, { extends: "p" });
            customElements.define("webc-events", WebcEvents);

            window.init = init;
            domReady(init);

            async function init() {
                console.log("init called.");
            }
        </script>

        
    -->


</html>