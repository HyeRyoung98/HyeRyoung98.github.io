
<?php
$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");

$query =  "DELETE FROM  tourist
WHERE
ID = '".$_GET['id']."'";
$s = oci_parse($c, $query);

$SNAME = $_GET['id'];

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);

$query =  "DELETE FROM  review
WHERE
ID = '".$_GET['user']."' AND num = '".$_GET['attraction_number']."'";

$s = oci_parse($c, $query);

$SNAME = $_GET['user'];

print ' successfully  deleted...';


$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
oci_close($c);
?>

<!DOCTYPE html>

<html>

<head>

<title>ADMIN PAGE</title>

</head>

<body>
<p></p>
<p></p>
         <a href="http://software.hongik.ac.kr/a_team/a_team4/login.php">return_ to main page</a>

</body>

</html>


