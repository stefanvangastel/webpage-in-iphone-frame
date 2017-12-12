<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" media="screen" href="css/main.css">
        <style>
        <?php
            //Set timezone 
            date_default_timezone_set('Europe/Amsterdam');

            //Set scale and overwrite it with env or get params
            $scale = '1.0';

            if( ! empty($_ENV['scale']) ){
                $scale = $_ENV['scale'];
            }
            if( ! empty($_GET['scale']) ){
                $scale = $_GET['scale'];
            }
        ?>
            .test {
                transform: scale(<?= $scale ?>);
                transform-origin: 0 0;
                -moz-transform: scale(<?= $scale ?>);
                -webkit-transform: scale(<?= $scale ?>);
            }
        
        </style>
    </head>
    <body>

        <?php
            $urls = [];

            $params = array_merge($_ENV,$_GET);

            //Get all env and get vars starting with URL_
            foreach($params as $key => $val){
                if(stristr($key,'URL_')){

                    //Get the 'id' for this 
                    $id = str_ireplace('URL_','',$key);

                    //Add URL
                    $urls[$id]['url'] = $val;

                    //Filter out optional TITLE_<ID> and LINK_<ID> properties
                    if( ! empty($params["TITLE_$id"])){
                        
                        //Add title
                        $urls[$id]['title'] = $params["TITLE_$id"];

                        //Add link if exists
                        if( ! empty($params["LINK_$id"])){
                            //Add link
                            $urls[$id]['link'] = $params["LINK_$id"];
                        }
                    }
                }
            }

            sort($urls);
        ?>

        <section id="devices">
        
            <?php
            //Usage message 
            if(empty($urls)){

                echo "Usage example: ";
                echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                echo "?URL_1=http://nu.nl&URL_2=http://example.com&TITLE_2=Example.com&LINK_2=http://lipsum.com&scale=0.7";
            }
            
            foreach($urls as $url) { ?>

                <div class="deviceWrap iphone-6-portrait">

                    <?php 
                    if(!empty($url['title'])) {

                        //Add link if any
                        if(!empty($url['link'])) {
                            $url['title'] = "<a href='${url['link']}' target='_blank'>${url['title']} [^]</a>";
                        }
                        
                    ?>

                        <div class="title"><?= $url['title'] ?></div>

                    <?php } ?>

                    <div class="device" style="
                            width: 377px;
                            height: 647px;
                            padding-top: 20px;
                            padding-bottom: 0px;
                            border:0px;">

                        <div class="flashingTop" style="height: 20px; width: 420px">
                            <span class="time"><strong><?php echo date('H:i'); ?></strong></span>
                        </div>

                        <iframe src="<?php echo $url['url']; ?>" id="iphone-6-portrait" style=""></iframe>

                    </div>
                </div>
            <?php } ?>

        </section>
    </body>
</html>