<!DOCTYPE html> 
<head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
  <title>seasons</title> 
  <style>
    .mytitle {
      background-color : skyblue;
      color : white ;
      text-align : center;
      padding : 10px;
      margin-bottom : 20px;
      widith : 300px;
    }

    table {
      border-top: 1px solid #444444;
      border-collapse: collapse;
      border-color:skyblue;
    }

    th, td {
      border-bottom: 1px solid #444444;
      border-color : skyblue;
      padding: 30px;
      color : gray;
    }


  </style>
</head>


<body>
  <div class = "mytitle">
    <h1>
      <?php
      echo $_GET['month'];
      ?>月
    </h1>
  </div>

  <?php

    $c = mysqli_connect('211.247.98.249','cf','colorfit','tour') or die("connection failed");
    mysqli_set_charset($c, "utf8");

    function month($s) {
      print '<table >';
      while ($row = mysqli_fetch_array($s)) {
        print '<tr>';
        foreach ($row as $item) {
          print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
        }
        print '</tr>';
      }
      print '</table>';
    }


    function hi($s) {
      print '<table>';
      while ($row = mysqli_fetch_array($s)) {
        print '<tr>';
        foreach ($row as $item) { 
          print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
        }
        print '</tr>';
      }
      print '</table>';
    }

    $query = "select attraction.name,
    from attraction, S_A
    where S_A.month= '".$_GET['month']."'
    and S_A.num = attraction.num
    and S_A.recommend = 1";

    $s = mysqli_query($c, $query);
    month($s);

    $query = "select attraction.name, inf.address, inf.inform, inf.tel
    from attraction, S_A, inf
    where S_A.month= '".$_GET['month']."'
    and S_A.num = attraction.num
    and S_A.recommend = 1
    and attraction.num = inf.num";

    $s = mysqli_query($c, $query);
    hi($s);

    mysqli_close($c); 
  ?> 
</body>