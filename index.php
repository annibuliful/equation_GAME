<html>
  <head><title> Equation Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style >
    body {
  background: url(new3.png);
  background-size: 105% 110%;
}
    </style>
  </head>
  <div class="modal fade" id="howto" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="how3.png"width="200" height="60"/></h4>
          </div>
          <div class="modal-body"><p><img src="hh.png" width="567" height="500" /></p>
          </div><div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div></div></div></div>

  <div class="modal fade" id="contact" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="contract2.png"width="200" height="60"/></h4>
          </div>
          <div class="modal-body"><p><img src="contact.png" width="567" height="500" /></p>
          </div><div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div></div></div></div>

  <div class="modal fade" id="register" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;<img src="register.png"width="220" height="80"/></h4>
      </div>
      <div class="modal-body">
        <form action="register.php" method="post" enctype="multipart/form-data">
          <div class="center">&nbsp;ชื่อผู้ใช้งาน : <input type="text" name="user" ></div><br>
          <div class="center">&nbsp;&nbsp;&nbsp;&nbsp;รหัสผ่าน : <input type="password" name="pass" ></div><br>
          <div class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail : <input type="text" name="mail"></div><br>
            <div class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เบอร์ : <input type="text" name="phone"></div><br>
          <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ :
            <input type="radio" name="sex" value="man">เพศชาย
               &nbsp;&nbsp;<input type="radio" name="sex" value="woman">เพศหญิง</div><br>
          <div>รูป : <input type="file" name="picture" width="50"></div><br>
          <div>&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="114.gif" width="40" height="40"alt="Submit"></div>


        </form>
      </div>
    </div>

  </div>
</div>
	<body>

<br><br><br><div class="row">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>
	<div class="col-xs-4">
<p><a class="btn btn-sm " data-toggle="modal" data-target="#register">
  <img src = "11.png"></a></p>
	<p><a class="btn " data-toggle="modal" data-target="#howto"><img src = "12.png"></a></p>
    <a class="btn " data-toggle="modal" data-target="#contact"><img src = "13.png"><br>
</a>
  </div>
  <div class="col-xs-3"></div><div class="col-xs-2"></div><div class="col-xs-3 ">
    <br><br><br><br><br><br><br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;<form action="login.php" method="post">
  <p>  PlayerID &nbsp;&nbsp;: <input type="text" name="username" placeholder="ชื่อผู้ใช้"></p>
      <p>Password : <input type="password" name="password" placeholder="รหัสผ่าน"></p>
      <p><input type="image" src="114.gif" width="37" height="37"alt="submit" align="middle"></p>
  </form></div>

  <div class="col-xs-4 text-center"><br><br><br><br><br>
    <br><br><br><br><br><img src = "cc.png" ></div>
  <div class="col-xs-4"><br><br><br><br>
  <?php
  $con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");
  $sql = "SELECT * FROM player ORDER BY score DESC LIMIT 3";
  $query = mysqli_query($con,$sql);
  while ($data = mysqli_fetch_array($query)) {
    echo "  <p><h4>&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src=\"pic/".$data['picture']."\" width=\"50\" height=\"40\">&nbsp;".$data['user']."</h4></p><br>";
  }
  ?>
  </div>

</div>
  <div class="col-xs-4 text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>

<div class="col-xs-4"></div>
<br><br>
<div class="row"><div class="col-xs-4"><audio controls >
<source src="song.mp3" type="audio/mpeg" ></audio></div></div>
</body>
  </html>
