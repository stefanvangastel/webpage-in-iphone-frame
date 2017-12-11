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
            body {
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

                    //TODO: Filter out optional URL_<ID>_TITLE and URL_<ID>_LINK properties
                    $urls[] = $val;
                }
            }

            $urls = array_unique($urls);
            sort($urls);
        ?>

        <section id="devices">
        
            <?php
            //Usage message 
            if(empty($urls)){

                echo "Usage example: ";
                echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                echo "?URL_1=http://nu.nl&URL_2=http://example.com&scale=0.7";
            }
            
            foreach($urls as $url) { ?>

                <div class="deviceWrap iphone-6-portrait">

                    <div class="title">Test title</div>

                    <div class="device" style="
                            width: 377px;
                            height: 647px;
                            padding-top: 20px;
                            padding-bottom: 44px;
                            border:0px;">

                        <div class="flashingTop" style="height: 20px; width: 420px">
                            <span class="time"><strong><?php echo date('H:i'); ?></strong></span>
                        </div>

                        <iframe src="<?php echo $url; ?>" id="iphone-6-portrait" style=""></iframe>

                    </div>
                </div>
            <?php } ?>

        </section>
    </body>
</html>