<?php
class HomePageFunction {

    public $conf_path;
    public $assets_path;
    public $title;
    public $pageUrl;
    public $description;

    public function __construct($conf_path = "./assets/config.php", $title = "Cafe CrescenT") {
        $this->conf_path = $conf_path;
        $this->assets_path = str_replace("/config.php", "", $conf_path);
        $this->title = $title;

        $this->pageUrl = $this->getUrl().'/';
        $this->description = "Cafe CrescenT 一日の小休憩に。このサイトはMonster2408のデモサイトです。";
    }

    public function setPageUrl($url) {
        if ($this->startsWith($url, $this->getUrl()) === FALSE) {
            $url = $this->getUrl() . $url;
        }
        $this->pageUrl = $url;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function printMetaData() {
        include($this->conf_path);
        echo $html["common_head"];
        $title = $this->getTitle();
        if (strpos($title, "MonsterLifeServer") === false) {
            $title = $title . " | MonsterLifeServer";
        }
        echo '<meta charset="utf-8">';
        echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">';

        echo '<title>'.$title.'</title>';
        echo '<meta name="description" content="'.$this->getDescription().'">';

		echo '<meta property="og:title" content="'.$this->getTitle().'" />';
		echo '<meta property="og:url" content="'.$this->getPageUrl().'" />';
		echo '<meta property="og:description" content="'.$this->getDescription().'" />';
        echo '<meta property="og:site_name" content="'.$this->getSiteName().'" />';
        echo '<meta property="og:image" content="'.$this->getPageUrl().'/assets/img/facebook_cover.jpg">';
        echo '<meta property="og:locale" content="ja_JP">';
        echo '<meta property="og:type" content="website">';

        echo '<meta name="twitter:image" content="'.$this->getPageUrl().'/assets/img/120x120.png" />';
        echo '<meta name="twitter:title" content="'.$this->getTitle().'" />';
        echo '<meta name="twitter:description" content="'.$this->getDescription().'" />';
        echo '<meta name="twitter:card" content="summary" />';
    }

    public function printFootScript() {
        include($this->conf_path);
        echo '<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>';
        echo '<script src="'.$this->getUrl().'/assets/js/main-bottom.js"></script>';
    }

    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

    public function getPageUrl() {
        return $this->pageUrl;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getConf() {
        include($this->conf_path);
        return $conf;
    }

    public function getUrl() {
        include($this->conf_path);
        return $conf["url"];
    }

    public function getSiteName() {
        include($this->conf_path);
        return $conf["site_name"];
    }

    public function getSqlHost() {
        include($this->conf_path);
        return $conf["sql"]["host"];
    }

    public function getSqlDataBase() {
        include($this->conf_path);
        return $conf["sql"]["db"];
    }

    public function getSqlPort() {
        include($this->conf_path);
        return $conf["sql"]["port"];
    }

    public function getSqlUser() {
        include($this->conf_path);
        return $conf["sql"]["user"];
    }

    public function getSqlPassWord() {
        include($this->conf_path);
        return $conf["sql"]["password"];
    }

    public function isLocal() {
        return strpos($_SERVER["HTTP_HOST"], "localhost");
    }

    public function startsWith($haystack, $needle) {
        return (strpos($haystack, $needle) === 0);
    }

    public function getFooterTime($year) {
        if ($year === date('Y')) return date('Y');
        else return "2022-" . date('Y');
    }

}

?>