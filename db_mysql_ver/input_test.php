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
    .adminp{
      background-color : skyblue;
      color : white ;
      text-align : center;
    }

    .warp {
      border-style:dotted;
      border-color:skyblue;
      text-align : center;
      width : 50%;
      margin : auto;
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
      HI!
      <?php
      echo $_GET['id'];
      ?>
    </h1>
  </div>

  <?php
   $c = mysqli_connect('211.247.98.249','cf','colorfit','tour') or die("connection failed");
   mysqli_set_charset($c, "utf8");

    if ($_GET['id']=='B689037' && $_GET['pw']=='1234'){
      print '<div class = "warp">';
      print '<div class = "adminp"';
      print '<p>WELCOME! ADMIN PAGE</p>';
      print '</div>';
      print '<font color="gray"> Delete Memver</font>';
      print '<form method="get" action="ADMIN.php">';
                  print '<font color="gray"> ID : <input type="text" name="id"/>';
                      print '&ensp;<button>delete</button></form>';
      print '<p>';
      print '</p>';
      print '</div>';
      print '<div class = "warp">';

      print 'Delete Review';
      print '<form method="get" action="ADMIN.php">';
                  print '&ensp;&ensp;&ensp;&ensp;&ensp;<font color="gray"> user : <input type="text" name="user"/>';
          print '<p></p>';
                  print 'atttraction_number : <input type="text" name="attraction_number"/>';
                      print '&ensp;<button>delete</button></form>';
      print '<p>';
      print '</p>';
      print '</div>';
      print '<div class = "warp">';

      $query = "select * from attraction";
      $s = mysqli_query($c, $query);
      admin($s);

      print '</div>';
    }



    function do_fetch($myeid, $s)
    {
      print '<p>$SNAME is ' . $myeid . '</p>';
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

    function yreview($myeid, $s)
    {
      print '<p><font color = "gray">This is ' . $myeid . 's reviews</font></p>';
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

    function youlike($s)
    {
      print '<p><font color = "gray">We Recommend you</font>';
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

    function admin($s)
    {
      print '<p>Attraction number information.';
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

    function Mon($s)
    {
      print '<p><font color="gray">A good season to go out to play is</font>';
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



    $query = "select attraction.name, review.text, review.star, review.time
    from attraction, tourist, review
    where tourist.ID = '".$_GET['id']."'
    and tourist.pwd = '".$_GET['pw']."'
    and attraction.num = review.num
    and review.ID = tourist.id";


    $s = mysqli_query($c, $query);
    $SNAME = $_GET['id'];
    yreview($SNAME, $s);



    $query = "select * from attraction 
    INNER JOIN tourist 
    ON tourist.hope_p=attraction.stat 
    where tourist.id='".$_GET['id']."'
    and tourist.pwd = '".$_GET['pw']."'";


    $s = mysqli_query($c, $query);

    $query = "select attraction.name, inf.address, inf.inform, inf.tel
    from tourist, attraction,inf
    where tourist.id='".$_GET['id']."'
    and tourist.pwd = '".$_GET['pw']."'
    and tourist.hope_p=attraction.stat
    and tourist.hope_t=attraction.category
    and inf.num=attraction.num";

    $s = mysqli_query($c, $query);
    youlike($s);



    $query = "select S_A.month, S_A.advice, S_A.temperature
    from tourist, attraction, S_A
    where tourist.id='".$_GET['id']."'
    and tourist.pwd = '".$_GET['pw']."'
    and tourist.hope_p=attraction.stat
    and tourist.hope_t=attraction.category
    and S_A.num=attraction.num
    and S_A.recommend=1";


    $s = mysqli_query($c, $query);
    Mon($s);


    print'</p>';
    print '<font color="gray">Please enter a value to write a review</font>';
    print '<p>';

    print '<form method="get" action="Putreview.php">';
                print '<font color="gray"> place : <input type="text" name="place"/>';
    print '<font color="gray">&ensp; ID : <input type="text" name="ID"/>';
    print '<font color="gray"> &ensp; text : <input type="text" name="text"/>';
      print '<font color="gray"> &ensp; star : <input type="text" name="star"/>';
    print '<font color="gray">&ensp; time : <input type="text" name="time"/>';

                    print '&ensp;<button>Upload</button></form>';





    mysqli_close($c);


  ?>
</body>





