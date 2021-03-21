

<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>تسجيل الدخول</title>
        <link rel="stylesheet" href="style/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style/css/custom.css"/>
		
		<script type="text/javascript">




		function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 

		</script>
		
		
		
		
		
		
        <style>
            footer{
                color: #fff;
                padding: 15px 0px;
                font-size: 17px;
                background-color: #222;
            }
            .panel-body{
                padding-bottom: 10px;
            }
        </style>
    </head>


		<div class="container-fluid" style="background: #f3f3f3; background-image:url('bank.jpg'); height:657px; margin-top:0px;">

            <div class="col-md-12 " align="center" >
                <div class="login-panel panel panel-default" align="right" style="border-radius:10px; width:800px; box-shadow:2px 2px 2px 0px; margin-top:20px;">
                  
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>
							
							 
							  <h3 align="right"></i>: الرجاء ادخال المعلومات التالية</h3>
							
							<label>الاسم</label>
								<div class="form-group">
									<input class="form-control" name="userid" type="text" autocomplete="off" required placeholder="">
								</div>
							<label>كلمة السر</label>
								<div class="form-group">
									<input class="form-control" name="password" type="password" id="myInput" autocomplete="off"  required placeholder="">
								    اظهار كلمة السر <input type="checkbox" onclick="myFunction()">
								</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){ /*'اذا تم الضغط على submit'*/
$name = $_POST['userid'];
$password = $_POST['password'];
/*
$i=0;
$value=0;
$x=mysqli_query($con,"SELECT `name` from `user` WHERE `name`=$name");
while($row=mysqli_fetch_array($x))
{
if($name==$row['name'])
$value=1;
$i++;
}
*/


$i1=0;
$value1=0;

$x1=mysqli_fetch_array(mysqli_query($con,"SELECT  `password` FROM `user` WHERE `userid`=$userid"));
if($password==$x1[0]){
$value1=1;
}

if($value1==1){ /*'التحقق من رقم الحساب وكلمة السر'*/
echo "<script>window.open('report.php','_self')</script>";
}

else{echo "<script>window.open('loginmsg.php','_self')</script>";}

}


if(isset($_POST['cancel'])){ /*'اذا تم الضغط على رجوع'*/

echo "<script>window.open('index.php','_self')</script>";}


?>


							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> </i> موافق </button>
                                <button name="cancel" type="submit" value="Cancel" formnovalidate class="btn btn-success" style="padding:12px 20px;"> </i> رجوع </button>
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>