<?php 
date_default_timezone_set('Asia/Kolkata');
?>
<html>
    <head>
        <meta http-equiv="refresh" content="1">
        <title>DIGITAL CLOCK</title>
        <style>
            body{
                background-color: black;
            }
            #clock{
                position:fixed;
                color:white;
                top:50%;
                left:50%;
                font-size:80px;
                transform: translate(-50%,-50%);
            }
            </style>
    </head>
    <body>
        <p id="clock"><?php  echo date('h:i:s a');?></p>
    </body>
</html>