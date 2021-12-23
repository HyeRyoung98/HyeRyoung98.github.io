<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>여행가자 - 로그인</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
  .mytitle {
    background-color : skyblue;
    color : white;
    text-align : center;
    border-radius : 20px;
    padding-top : 10px;
    padding-bottom : 10px;
    margin : 20px;
  }
.wrap{text-align : right;}
  </style>
  </head>

  
  <body>
 <div class = "wrap">
  
        <form method="get" action="input_test.php">
              <font color="gray"> id : <input type="text" name="id"/>
                pw : <input type="text" name="pw"/>
		<button>login</button></form></font>
<p></P>
	<form  method="get" action="newtourist0.html">
             &ensp; &ensp;
<font size="2em" color="gray">Are you going to make new account
   		<button>Sign up</button></form></font>
</div>


 <div class = "mytitle">
  <h2>Where do you want to go?, What do you want to do?</h2>
<h5>If you are a member, we will provide you with tourist attractions and season and advice that
 suits your taste.</h5>
           <form method="get" action="attraction.php">
                tema : <input type="text" name="id" style="border: none;"/>       
        &ensp; &ensp; state : <input type="text" name="pw" style="border: none;"/>
         <button>submit</button>
        </form>
</div>




    <div class = "mytitle">
  <h2> When will you go on a trip?</h2>
  <h5>Get Some recommend from us! just free!</h5>
 <h6> Please Write Cappital  ex)Winter,Summer...</h6>

        <form method="get" action="month.php">
         month : <input type="text" name="month" style="border: none;"/>
        <button>submit</button>
       </form>

        <form method="get" action="seasons.php">
        season : <input type="text" name="season" style="border: none;"/>
         <button>submit</button>
       </form>
</div>



<div class = "mytitle">
  <h2> Or.. just want's some information about attractions</h2>
  <h5>Get some inform</h5>

        <form method="get" action="check.php">
         name : <input type="text" name="name" style="border: none;"/>
        <button>submit</button>
        </form>
</div>
</body>
</html>


