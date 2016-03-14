<?php
header('Content-Type: text/html; charset=UTF-8');
define( "WB_AKEY" , '<your key>' );
define( "WB_SKEY" , '<your secret>' );
define( "TOKEN_URL" , 'https://api.weibo.com/oauth2/access_token');
define( "AUTH_URL" , 'https://api.weibo.com/oauth2/authorize');
define( "CA_URL" , 'http://<your domain>/callback.php' );
<?>