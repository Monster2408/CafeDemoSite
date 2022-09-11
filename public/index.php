<?php
echo $_SERVER["DOCUMENT_ROOT"];
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
            <div class="news">
                <div class="new-icon">New</div>
                <div class="news-topic">
                    <ul>
                        <li id="news-1">2022/08/08 aaaa</li>
                        <li id="news-2">2022/07/06 bbbb</li>
                        <li id="news-3">2022/06/01 cccc</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>