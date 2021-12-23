<?php 
    $con = mysqli_connect('211.247.98.249','cf','colorfit','goods') or die("connection failed");
    mysqli_set_charset($con, "utf8");

    $query =  "INSERT INTO tourist (ID,pwd,phone,birth,hope_p,hope_t)
    VALUES ('".$_GET['id']."' ,'".$_GET['pw']."' ,'".$_GET['phone']."' ,'".$_GET['birth']."' ,'".$_GET['hope_p']."' ,'".$_GET['hope_t']."')";
    $s = mysqli_query($c, $query);

    $SNAME = $_GET['id'];

    print 'Now you can enter by ID=  '.$SNAME.'     PW=   '.$_GET['pw'];

    mysqli_close($c);
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Welcome to our new member!</title>
    </head>

    <body>
        <p></p>
        <p></p>
        <a href="login.php">return_ to main page</a>
    </body>

</html>

