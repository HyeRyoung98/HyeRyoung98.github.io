<?php
    if ($_GET['place']=='Seongsan Ilchulbong Tuff Cone'){ $A=1; }
    else if ($_GET['place']=='TeddyBearMuseum'){ $A=2; }
    else if ($_GET['place']=='Yongyeon Valley'){ $A=3; }
    else if ($_GET['place']=='DoryeonTangerineForest'){ $A=4;}

    $c = mysqli_connect('211.247.98.249','cf','colorfit','tour') or die("connection failed");
    mysqli_set_charset($c, "utf8");

    $query =  "INSERT INTO review (num,ID,text,star,time)
    VALUES ('".$A."' ,'".$_GET['ID']."' ,'".$_GET['text']."' ,'".$_GET['star']."' ,'".$_GET['time']."')";
    $s = mysqli_query($c, $query);
    $SNAME = $_GET['id'];

    print 'Successfully upload!';
    mysqli_close($c);
?>

<!DOCTYPE html>
<html>

    <head>
        <title>ADMIN PAGE</title>
    </head>

    <body>
        <p></p>
        <p></p>
        <a href="login.php">return_ to main page</a>
    </body>

</html>





