<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bpopup.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title></title>
  </head>
  <body background="back17.jpg">
    <?php
    $connect = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
    $sql = "SELECT * FROM player WHERE user='".$_POST['user']."'";
    $query = mysqli_query($connect,$sql);

    if(mysqli_fetch_array($query)){
    echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br>
    <br><br><br><br><br><h2><br><h2>PlayerIDถูกใช้ไปแล้ว กำลังพาไปหน้าหลัก..</h2></div>";
    header( "refresh: 2; url=index.php" );
     exit(0);

   }else{
    $sql = "INSERT INTO player (user,password,mail,phone,sex,picture)
    VALUES('".$_POST['user']."',
    '".$_POST['pass']."',
    '".$_POST['mail']."',
    '".$_POST['phone']."',
    '".$_POST['sex']."',
    '".$_FILES['picture']['name']."')";
    move_uploaded_file($_FILES['picture']['tmp_name'],"/var/www/html/web/pic/".$_FILES['picture']['name']);
    $query = mysqli_query($connect,$sql);
    echo "<div class=\"col-sm-12 text-center\"><br><br><br><br><br>
    <br><br><br><br><br><h2><br><h2>ลงทะเบียน PlayerID สำเร็จ กำลังพาไปหน้าหลัก..</h2></div>";
    header( "refresh: 2; url=index.php" );
     exit(0);
   }
    ?>
  </body>
</html>
<?php
$author = array('jarupong_pajakgo','kanokporn_sukpon','kewalin_panyapak');
$school = 'Phothisamphanpittayakhan school'; ?>
