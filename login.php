<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Equation Game</title>
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
if(isset($_SESSION['id'])){
header( "location: main.php");
echo "<div class=\"col-md-12 text-center\"><h2>กำลังพาไปหน้าเกมส์</h2></div>";
exit(0);

}else {
	$con = mysqli_connect("localhost","root","@PeNtesterMYSQL","equaltion");

	if(isset($_POST['username']) && isset($_POST['password'])){
		$sql = "SELECT * FROM player WHERE user='".$_POST['username']
		."' AND password='".$_POST['password']."'";
		$query = mysqli_query($con,$sql);
		$data = mysqli_fetch_array($query);
		if($data){
			$_SESSION['id'] = $data['id'];
			header( "location: main.php");
		}else { echo "<div class=\"col-md-12 text-center\"><h2>ไม่เจอชื่อผู้ใช้นี้ในฐานข้อมูล กำลังพาไปหน้าหลัก..</h2></div>";
			 header("refresh: 3; url=index.php");

		}
	}else {
		echo "<div class=\"col-md-12 text-center\"><h2>ใส่ข้อมูลให้ครับทุกช่อง</h2></div>";header("refresh: 3; url=index.php");

	}
}
		 ?>
	</body>
</html>
<?php
$author = array('jarupong_pajakgo','kanokporn_sukpon','kewalin_panyapak');
$school = 'Phothisamphanpittayakhan school'; ?>
