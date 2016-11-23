<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>

        <?php
            //Get website
            $url = 'http://example.com';

            //Read from env (Docker)
            if(getenv('URL')){
                $url = getenv('URL');
            }

            //Get from GET query
            if(!empty($_GET['url'])){
                $url = $_GET['url'];
            }
        ?>

        <section id="devices">

            <div class="deviceWrap iphone-6-portrait">

            <div class="device" style="
                    width: 375px;
                    height: 603px;
                    padding-top: 20px;
                    padding-bottom: 44px;">

                <div class="flashingTop" style="height: 20px; width: 375px">
                    <span class="time"><?php echo date('H:i'); ?></span>
                </div>

                <iframe src="<?php echo $url; ?>" id="iphone-6-portrait" style=""></iframe>

            </div>
        </div>
        </section>
    </body>
</html>