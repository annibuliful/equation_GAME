<?php
ob_start();
session_start();
session_destroy();
?>
<!DOCTYPE>
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bpopup.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<body background="back17.jpg">
  <div class="col-md-12 text-center"><h2>กรุณารอสักครู่ กำลังออกจากระบบ...</h2></div>

<?php
header( "refresh: 3; url=index.php" );
 exit(0);
?>
</head></html>
<?php
$author = array('jarupong_pajakgo','kanokporn_sukpon','kewalin_panyapak');
$school = 'Phothisamphanpittayakhan school'; ?>
