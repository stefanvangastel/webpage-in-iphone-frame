<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>

        <?php
            $urls = [];

            $params = array_merge($_ENV,$_GET);

            //Get all env vars starting with URL_
            foreach($params as $key => $val){
                if(stristr($key,'URL_')){
                    $urls[] = $val;
                }
            }

            $urls = array_unique($urls);  
        ?>

        <section id="devices">
            
            <?php foreach($urls as $url) { ?>
                <div class="deviceWrap iphone-6-portrait">

                    <div class="device" style="
                            width: 377px;
                            height: 647px;
                            padding-top: 20px;
                            padding-bottom: 44px;
                            border:0px;">

                        <div class="flashingTop" style="height: 20px; width: 375px">
                            <span class="time"><?php echo date('H:i'); ?></span>
                        </div>

                        <iframe src="<?php echo $url; ?>" id="iphone-6-portrait" style=""></iframe>

                    </div>
                </div>
            <?php } ?>

        </section>
    </body>
</html>