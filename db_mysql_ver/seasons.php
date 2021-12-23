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
        echo $_GET['season'];
      ?>
    </h1>
    <h5>We recommend you...</h5>
  </div>
  
  <?php
    $c = mysqli_connect('211.247.98.249','cf','colorfit','tour') or die("connection failed");
    mysqli_set_charset($c, "utf8");

    function seasons($s) {
      print '<table>';
      while ($row = mysqli_fetch_array($s)) {
        print '<tr>'; 
        foreach ($row as $item){
          print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
        }
        print '</tr>';
      }
      print '</table>';
    }

    $query = "select seasons.month, attraction.name, inf.address, inf.inform, inf.tel
    from attraction, S_A, inf, seasons
    where seasons.season = '" .$_GET['season']. "' 
    and seasons.month=S_A.month
    and S_A.num = attraction.num
    and S_A.recommend = 1
    and attraction.num = inf.num
    order by month";

    $s = mysqli_query($c, $query);
    seasons($s);

    mysqli_close($c); 
  ?>

</body> 
