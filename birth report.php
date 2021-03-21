<?php
session_start();
ob_start();
$db_username = 'root';  
$db_password = '';  
$db_name = 'epassort';  
$db_host = 'localhost';
  
$conDB = mysql_connect($db_host, $db_username, $db_password)or die('Error: Could not connect to database.');
$db = @mysql_select_db($db_name);
@mysql_query("SET CHARACTER SET 'UTF8'");
@mysql_query("SET NAMES 'UTF8'");

if(!isset($_SESSION['username'])){
	header('LOCATION:login.php');
}else{
echo'<title>التقارير حسب الوجهة</title>';
$place = $_POST['place'];
?>

<?php
$b = $_POST['birth'];
?>
<?php
    $get = mysql_query("SELECT * FROM `bahri passport`");
			  $num = mysql_num_rows($get);
			  
  ?>