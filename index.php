
<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>الإدارة العامة للجوازات والهجرة</title>
        <link rel="stylesheet" href="style/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style/css/custom.css"/>
        <style>
            footer{
                color: #fff;
                padding: 15px 0px;
                font-size: 17px;
                background-color: #222;
            }
            .panel-body{
                padding-bottom: 220px;
            }
        </style>
    </head>
	<body style="background: #ccc;"  align="right" >
		<nav class="navbar-fixed-top" style="background:#1abc9c; height:100px; ">
			<div class="container">
                <div class="navbar-header " >
                   <img src="fotter.png">
                </div>
			</div>
		</nav>
		<!-- navbar ends-->

		<div class="container-fluid" style="background: #f3f3f3; background-image:url('image.jpg'); height:555px; margin-top:50px;">
			<br/><div class="row">
                <div class="col-sm-5"></div>
				<!-- Main Menu -->
                <div class="col-sm-2">
                    <div class="panel" style="border-radius:10px; height:300px ; background:transparent; box-shadow:2px 2px 4px 4px ;margin-top:50px;">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="style/images/passport.jpg" style="width: 50%;border-radius: 10%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px; color:white">إصدار جواز إلكتروني</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                                  <a class="btn btn-success" style="padding:15px 20px; background:;" href="form.php"></i>  إنتقال</a>
                         </center>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-0"></div>
		<right>
        <a class="btn btn-success" style="padding:5px 5px; background:;" href="login.php"></i>التقارير</a>
        </right>
			</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";
$con = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
mysqli_query($con,"UPDATE `passport` SET `checkk`='f' WHERE `checkk`='t'");
mysqli_query($con,"UPDATE `bank` SET `checkk`='f' WHERE `checkk`='t'");
?>
        
		</div>
		<!-- Main div end -->
		<footer class="container-fluid"  style="background:#00001a; height:52px ;margin-top:0px;">
            <p align="right">جميع الحقوق محفوظة للإدارة العامة للجوازات والهجرة 2019</p>

        </footer>
		<!-- footer end-->
	</body>
</html>
