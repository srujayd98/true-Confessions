<?php

function setcomment($conn){
    if(!empty($_POST['g-recaptcha-response'])){
    include "dbh.inc.php";
    $secret = 'secret-key';
    $verfiyres = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $resdata = json_decode($verfiyres);
    if(isset($_POST['submitc'])&&$_POST['comment']&&!empty(trim($_POST['comment']))&&$resdata->success){
        $date=$_POST['date'];
        $comment=$_POST['comment'];
        
        $sql = "INSERT INTO data (date,comment) VALUES ('$date','$comment')";
        $result = $conn->query($sql);
        header('Location: '.$_SERVER['PHP_SELF']);
    }
}
}

function getcomment($conn){
    $sql = "SELECT * FROM data";
    $result = $conn->query($sql);
    echo "<div class='result1'>";
    while($row =$result->fetch_assoc()){
        echo "<div class='result'>";
            echo nl2br($row['comment']);
        echo "</div>";
    }
    echo "</div>";
}
