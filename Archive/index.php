<?php

require_once dirname(__FILE__)."/src/phpfreechat.class.php";
$params = array();
$params["title"] = 'School Chat';
$params["nick"] = "guest".rand(1,1000);  // setup the intitial nickname
$params['firstisadmin'] = false;
$params['admins'] = array( 'esyew' => 'erickisright' );
$params['language'] = 'en_US';

//$params["isadmin"] = false; // makes everybody admin: do not use it on production servers ;)
$params["serverid"] = md5(__FILE__); // calculate a unique id for this chat
$params["debug"] = false;
$chat = new phpFreeChat( $params );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>HelloID - Active Directory Login</title>
  <!--<link rel="stylesheet" title="classic" type="text/css" href="style/generic.css" />
  <link rel="stylesheet" title="classic" type="text/css" href="style/header.css" />
  <link rel="stylesheet" title="classic" type="text/css" href="style/footer.css" />
  <link rel="stylesheet" title="classic" type="text/css" href="style/menu.css" />
  <link rel="stylesheet" title="classic" type="text/css" href="style/content.css" />//-->  
 </head>
 <body>

<input type="button" value="Open a Popup Window of this" onclick="window.open('https://goo.gl/yHL93s','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">

<div class="content">
  <?php $chat->printChat(); ?><p style='color:black;font-weight:bold'>To make a username, type /nick <i>[your username]</i> (WARNING DO NOT USE YOUR REAL NAME)</p>
  <p style='color:blue'>By using this you accept any and all trouble. USE AT YOUR OWN RISK! Don't think I didn't warn you.)</p>
   <p style='color:black'>The purpose of this website is really useful for group work, becuase you don't need to exchange numbers or usernames for social media. Just think that Google Docs can do almost the same thing. So please, please don't block this website.</p>
    <p style='color:black'>DO NOT CURSE ON THE GLOBAL CHAT; Global chats can not be deleted.</p>
     <p style='color:black'>To create a private chat, click on the person you want to chat with and click start private chat. Chat won't appear on their screen until you say something first.</p>
</div>

<iframe src="http://schoolchatgroup.s3-website-us-west-1.amazonaws.com/index.php" height="500" width="300"></iframe>
    
</body></html>
