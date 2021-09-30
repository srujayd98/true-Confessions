<?php
    date_default_timezone_set('asia/kolkata');
    include 'dbh.inc.php';
    include 'comment.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="man.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=Niconne&display=swap" rel="stylesheet">
    <!-- google captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- tab icon -->
    <link rel="icon" href="TC.png">
    <!-- tab color -->
    <meta name="theme-color" content="rgb(0,106,175 )"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="rgb(0,106,175 )">
    <title>True Confessions</title>
</head>
<body>
    <div class="whole">
    <div class="hed">
        <h1><strong>True Confessions</strong></h1>
    </div>
    <div class="rule">
        <p class="rule1">Some importent points:</p><br>
        <ul class="rule1">
            <li>During the course of our college years a lot happend and still happening pros/cons, up/downs, support/oppose and many as such.</li>
            <li>True Confessions is an anonymous confessing platform exclusive for us to conclude, or continue, if any, on good terms.</li>
            <li>All confessions are anonymous and untraceable, bringing liberty to your notion.</li>
            <li>Once confessed, the confession cannot be edited/deleted.</li>
            <li>Be wise and responsible while confessing.</li>
            <li>Avoid expletive words, and make sure to verify captcha</li>
        </ul>
    </div>
    <div class="rule2">
        <p>CONFESSIONS</p>
    </div>
<?php

getcomment($conn);

echo "<form class='cen' method='POST' >
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea class='txet' name='comment' placeholder='confess here...'></textarea><br>
    <div class='g-recaptcha' data-sitekey='site-key'></div><br>
    <button type='submit' name='submitc' action='".setcomment($conn)."'>Confess</button> 
</form>";
?>
<div class="dev">
    <div><a href="https://github.com/Duni03" class="fa fa-github"></a>
    <a href="https://www.linkedin.com/in/nihald03/" class="fa fa-linkedin"></a>
    <a href="https://t.me/dunihal" class="fa fa-telegram"></a>
</div>
</div>
</body>
</html>
