<?php

include('./assets/function.php');
$func = new HomePageFunction('./assets/config.php', 'MonsterLifeServer');

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="<?php echo $func->getUrl(); ?>/assets/css/style.min.css">
        <link rel="stylesheet" href="<?php echo $func->getUrl(); ?>/assets/css/header.min.css">
    </head>
    <body>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
        <div class="contents">
            <div class="top_banner">
                <div class="top_banner_inner">
                    <ul>
                        <li><img src="<?php echo $func->getUrl(); ?>/assets/img/cafelate.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>