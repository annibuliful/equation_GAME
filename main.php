<?php
ob_start();
session_start();
if(isset($_SESSION['id'])){
  $con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
  $sql = "SELECT * FROM player WHERE id='".$_SESSION['id']."' LIMIT 1";
  $query = mysqli_query($con,$sql);
  while ($data = mysqli_fetch_array($query)) {
    $user = $data['user'];
    $mail = $data['mail'];
    $phone = $data['phone'];
    $score = $data['score'];
    if ($data['sex'] === "man") {
      $sex = "ผู้ชาย";
    }else{$sex = "ผู้หญิง";}
  }
}else{
header( "refresh: 2; url=index.php" );
 exit(0);
}

?>
<?php
if(isset($_GET['type'])){
$con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
$sql1 = "SELECT * FROM `checkans` WHERE idp = '".$_SESSION['id']."' AND name = '".$_GET['id']."' AND idq = '".$_GET['type']."'";
$query = mysqli_query($con,$sql1);
if(!mysqli_fetch_array($query)){
  if($_GET['type'] == "north"){
    $sql = "SELECT * FROM north WHERE id='".$_GET['id']."'
    AND ans1='".$_GET['ans1']."'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);
    if($data){
      $sql1 = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
      echo "<div class=\"col-md-12\"><br><br><br></div>";
      echo "<div class=\"col-md-12 text-center\"><br><p><img src=
      \"detail/".$data['detail']."\" width=\"1060\"  ></p></div>";
      $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
      mysqli_query($con,$sql2);
    }else {
      $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
      echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";

    }

  }elseif ($_GET['type'] == "isan") {
    $sql = "SELECT * FROM Isan WHERE id='".$_GET['id']."'
    AND ans1='".$_GET['ans1']."'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);
    if($data){
      $sql1 = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
      echo "<div class=\"col-md-12\"><br><br><br></div>";
      echo "<div class=\"col-md-12 text-center\"><br><p><img src=
      \"detail/".$data['detail']."\" width=\"1060\" ></p></div>";
      $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
      mysqli_query($con,$sql2);
    }else {
      echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";
      $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);}

  }elseif ($_GET['type'] == "central") {
    $sql = "SELECT * FROM central WHERE id='".$_GET['id']."'
    AND ans1='".$_GET['ans1']."'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);
    if($data){
      $sql1 = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
      echo "<div class=\"col-md-12\"><br><br><br></div>";
      echo "<div class=\"col-md-12 text-center\"><br><p><img src=
      \"detail/".$data['detail']."\" width=\"1060\"  ></p></div>";
      $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
      mysqli_query($con,$sql2);
    }else {
      echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";
      $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
    }
}elseif ($_GET['type'] == "east") {
    $sql = "SELECT * FROM East WHERE id='".$_GET['id']."'
    AND ans1='".$_GET['ans1']."'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);
    if($data){
      $sql1 = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
      echo "<div class=\"col-md-12\"><br><br><br></div>";
      echo "<div class=\"col-md-12 text-center\"><br><p><img src=
      \"detail/".$data['detail']."\" width=\"1060\" ></p></div>";
      $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
      mysqli_query($con,$sql2);
    }else {
      echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";
      $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
      mysqli_query($con,$sql1);
    }
}elseif ($_GET['type'] == "west") {
  $sql = "SELECT * FROM west WHERE id='".$_GET['id']."'
  AND ans1='".$_GET['ans1']."'";
  $query = mysqli_query($con,$sql);
  $data = mysqli_fetch_array($query);
  if($data){
    $sql1 = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
    mysqli_query($con,$sql1);
    echo "<div class=\"col-md-12\"><br><br><br></div>";
    echo "<div class=\"col-md-12 text-center\"><br><p><img src=
    \"detail/".$data['detail']."\" width=\"1060\"  ></p></div>";
    $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
    mysqli_query($con,$sql2);
  }else {
    echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";
    $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
    mysqli_query($con,$sql1);
  }

}elseif ($_GET['type'] == "south") {
echo "true south";
$sql = "SELECT * FROM south WHERE id='".$_GET['id']."'
AND ans1='".$_GET['ans1']."'";
$query = mysqli_query($con,$sql);
$data = mysqli_fetch_array($query);
if($data){
  echo "<div class=\"col-md-12\"><br><br><br></div>";
  echo "<div class=\"col-md-12 text-center\"><br><p><img src=
  \"detail/".$data['detail']."\" width=\"1060\" ></p></div>";
  $sql = "UPDATE player SET score = score + 10 WHERE id='".$_SESSION['id']."'";
  mysqli_query($con,$sql);
  $sql2 = "INSERT INTO checkans VALUES ('".$_SESSION['id']."','".$_GET['id']."','".$_GET['type']."')";
  mysqli_query($con,$sql2);
}else {echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><h1>คำตอบไม่ถูกต้อง</h1></div>";
  $sql1 = "UPDATE player SET score = score - 2 WHERE id='".$_SESSION['id']."'";
  mysqli_query($con,$sql1);
 }
}
}else{echo "
  <!DOCTYPE html>
  <html>
  <head>
    <title>Equation Game</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">
    <script src=\"bootstrap/jquery/jquery.js\"></script>
    <script src=\"bootstrap/js/bootstrap.js\"></script>
    <script src=\"bpopup.js\"></script>
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.css\">
    <body background=\"back17.jpg\">
  <div class=\"col-sm-12 text-center\"><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<h1>โจทย์นี้ทำไปแล้วนะ&nbsp;&nbsp;กำลังพาไปหน้าแรก..</h1></div>
</body>
";
    }



}else {
  $sql3 = "SELECT * FROM player WHERE id='".$_SESSION['id']."'";
  $query1 = mysqli_query($con,$sql);
  $data1 = mysqli_fetch_array($query1);
  $echo1= "<br><br><div class=\"col-md-4\">
  </div>";
  $echo2 = "<div class=\"col-md-4 text-center\" style=\"background:url(ke2.png)\">
  <br><br><br><br><br><br><br>
  <img src=\"pic/".$data1['picture'].
  "\" class=\"img-circle\" width=\"160\" height=\"160\"><br><br>
  <h4> ยินดีต้อนรับคุณ ".$data1['user']."</h4>
  <h4> E-mail ".$data1['mail']."</h4>
  <h4> เบอร์โทรศัพท์ ".$data1['phone']."</h4><br><br><br>  </div>";

}



 ?>



<!DOCTYPE html>
<html>
<head>
  <title>Equation Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  .flip3D{ width:240px; height: 350px; margin:10px; float:left; }
  .flip3D > .front{
    position:absolute;
    transform: perspective( 600px ) rotateY( 0deg );
    background:url(p.png);background-size: 240px 390px;
   width:240px; height:390px; border-radius: 7px;
    backface-visibility: hidden;
    transition: transform .5s linear 0s;
  }
  .flip3D > .back{
    position:absolute;
    transform: perspective( 600px ) rotateY( 180deg );
    background: #80BFFF; width:240px; height:390px; border-radius: 7px;
    backface-visibility: hidden;
    transition: transform .5s linear 0s;
  }
  .flip3D:hover > .front{
    transform: perspective( 600px ) rotateY( -180deg );
  }
  .flip3D:hover > .back{
    transform: perspective( 600px ) rotateY( 0deg );
  }
  </style>

  <style>
  body {
      position: relative;
  }
  #south {padding-top:50px;height:768px; background: url(back17.jpg);}
  #north {padding-top:50px;height:768px; background:url(back17.jpg);}
  #isan {padding-top:50px;height:768px; background:url(back17.jpg);}
  #west {padding-top:50px;height:768px; background:url(back17.jpg);}
  #central {padding-top:50px;height:768px; background:url(back17.jpg);}
  #east {padding-top:50px;height:768px; background:url(back17.jpg);}
  #index {padding-top:50px;height:1810px; background:url(back17.jpg);}
  #index2 {padding-top:50px;height:1810px; background:url(back17.jpg);}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>

    </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav">
          <li><img src="45.png" width="70" height="60"/></li>
          <li><a href="#north"><img src="north1.png" width="70" height="30"/></a></li>
          <li><a href="#isan"><img src="isan1.png" width="165" height="30"/></a></li>
          <li><a href="#central"><img src="central1.png" width="70" height="30"/></a></li>
          <li><a href="#east"><img src="east1.png" width="90" height="30"/></a></li>
          <li><a href="#west"><img src="west1.png" width="90" height="30"/></a></li>
          <li><a href="#south"><img src="south1.png" width="70" height="30"/></a></li>
          <li><a href="asean.php"><img src="asean.png" width="70" height="30"/></a></li>
          <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li ><p><font color="white"><h3>Point <?php
          $con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
          $sql = "SELECT * FROM player WHERE id='".$_SESSION['id']."'";
          $query = mysqli_query($con,$sql);
          $data = mysqli_fetch_array($query);
          echo $data['score']; ?> / 770</h3></font></p></li>
          <li><a href="logout.php"><img src="out.png" width="50" height="40"/></a></li>
</ul>


      </div>
    </div>
  </div>
</nav>
<div id="index" class="container-fluid">
<?php echo $echo1; echo $echo2;?>
</div>
<div id="index2" class="container-fluid"></div>
<div id="north" class="container-fluid">
<div class="row"><br><br>
<?php
$sql = "SELECT * FROM north ORDER BY RAND() LIMIT 5";
$query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
echo "<div class=\"flip3D col-sm-2\">
      <div class=\"front\"></div>
      <div class=\"back\">
      <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
<input type=\"hidden\" name=\"type\" value=\"north\">
     <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
     <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
      </div></form>
</div>";}
?>
</div><div class="row"><br>
<div class="col-md-12 text-center"><h2><img src="check.png" height="100"/></h2></div></div></div>
<div id="isan" class="container-fluid">
  <div class="row"><br><br>
<?php
$sql = "SELECT * FROM Isan ORDER BY RAND() LIMIT 5";
$query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
echo "<div class=\"flip3D col-sm-2\">
      <div class=\"front\"></div>
      <div class=\"back\">
      <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
<input type=\"hidden\" name=\"type\" value=\"isan\">
     <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
     <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
      </div></form>
</div>";}
?></div>
<div class="col-md-12 text-center"><br><br><img src="check.png" height="100"/></div></div>
<div id="west" class="container-fluid">
  <div class="row"><br><br>
<?php
$sql = "SELECT * FROM west ORDER BY RAND() LIMIT 5";
$query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
echo "<div class=\"flip3D col-sm-2\">
      <div class=\"front\"></div>
      <div class=\"back\">
      <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
<input type=\"hidden\" name=\"type\" value=\"west\">
     <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
     <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
      </div></form>
</div>";}
?>
</div><div class="col-md-12 text-center"><br><br><img src="check.png" height="100"/></div></div>
<div id="central" class="container-fluid">
<div class="row"><br><br>
<?php
$sql = "SELECT * FROM central ORDER BY RAND() LIMIT 5";
$query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
echo "<div class=\"flip3D col-sm-2\">
      <div class=\"front\"></div>
      <div class=\"back\">
      <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
     <input type=\"hidden\" name=\"type\" value=\"central\">
     <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
     <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
      </div></form>
</div>";}
?>
</div><div class="col-md-12 text-center"><br><br><img src="check.png" height="100"/></div></div>
<div id="east" class="container-fluid">
  <div class="row"><br><br>
<?php
$sql = "SELECT * FROM East ORDER BY RAND() LIMIT 5";
$query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
echo "<div class=\"flip3D col-sm-2\">
      <div class=\"front\"></div>
      <div class=\"back\">
      <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
<input type=\"hidden\" name=\"type\" value=\"east\">
     <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
     <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
      </div></form>
</div>";}
?>
</div><div class="col-md-12 text-center"><br><br><img src="check.png" height="100"/></div></div>
<div id="south" class="container-fluid">
<div class="row"><br><br>
  <?php
$con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
$sql = "SELECT * FROM south ORDER BY RAND() LIMIT 5";
  $query = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($query)){
  echo "<div class=\"flip3D col-sm-2\">
        <div class=\"front\"></div>
        <div class=\"back\">
        <form action=\"main.php\" method=\"get\"><br><br><br><br><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp; <img src=\"uploads/".$data['question']."\" width=\"200\"valign=\"center\" align=\"center\"/>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
<input type=\"hidden\" name=\"type\" value=\"south\">
       <p align=\"center\"><input type=\"text\" name=\"ans1\"/></p>
       <p align=\"center\"><input type=\"image\" src=\"send.png\" width=\"85\" height=\"30\"alt=\"submit\"></p>
        </div></form>
  </div>";}
  ?></div><div class="col-md-12 text-center"><br><br><img src="check.png" height="100"/></div></div>
</body>
</html>
<?php
$author = array('jarupong_pajakgo','kanokporn_sukpon','kewalin_panyapak');
$school = 'Phothisamphanpittayakhan school'; ?>
