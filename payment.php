

<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>الدفع</title>
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
                    <div>
                        <h3 align="center"></i>مرحباً بك عزيزنا العميل..لقد تم تحويلك إلى هذه الصفحة لإتمام إجراءات الدفع الخاصة<br> بإصدار الجواز الإلكتروني</h3><br>
                        <h3 align="right"></i>: الرجاء اختيار البنك</h3>

                    </div>

                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>
							
							 <img src="style/images/onb.jpg">
							 <input type="radio" name="bank" value="onb">
							 
							 <img src="style/images/fib.jpg">
							 <input type="radio" name="bank" value="fib"><br>
							 
							  <h3 align="right"></i>: الرجاء ادخال المعلومات التالية</h3>
							
							<label>رقم الحساب</label>
								<div class="form-group">
									<input class="form-control" name="accnumb" type="text" autocomplete="off" required placeholder="">
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
$accnumb = $_POST['accnumb'];
$password = $_POST['password'];
$bank = $_POST['bank'];

if ($bank==onb){
$i=0;
$value=0;


$x=mysqli_query($con,"select accnumber from OmdurmanNationalBank");
while($row=mysqli_fetch_array($x))
{
if($accnumb==$row['accnumber'])
$value=1;
$i++;
}

$i1=0;
$value1=0;

$x1=mysqli_fetch_array(mysqli_query($con,"SELECT  `pass` FROM `OmdurmanNationalBank` WHERE `accnumber`='$accnumb'"));
if($password==$x1[0]){
$value1=1;
}

if($value==1&&$value1==1){ /*'التحقق من رقم الحساب وكلمة السر'*/
$x2=mysqli_fetch_array(mysqli_query($con,"SELECT  `amt` FROM `OmdurmanNationalBank` WHERE `accnumber`='$accnumb'"));
if($x2[0]<500){echo "<script>alert('عذراً رصيدك أقل من الرصيد المسموح لإتمام العملية')</script>";}
else{
echo "<script>window.open('paymentagree.php','_self')</script>";
mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='t' WHERE `accnumber`=$accnumb");
}}

else{echo "<script>window.open('bankmsg.php','_self')</script>";}

}


else if ($bank==fib){

$i=0;
$value=0;


$x=mysqli_query($con,"select accnumber from FeisalIslamicBank");
while($row=mysqli_fetch_array($x))
{
if($accnumb==$row['accnumber'])
$value=1;
$i++;
}

$i1=0;
$value1=0;

$x1=mysqli_fetch_array(mysqli_query($con,"SELECT  `pass` FROM `FeisalIslamicBank` WHERE `accnumber`='$accnumb'"));
if($password==$x1[0]){
$value1=1;
}

if($value==1&&$value1==1){ /*'التحقق من رقم الحساب وكلمة السر'*/
$x2=mysqli_fetch_array(mysqli_query($con,"SELECT  `amt` FROM `FeisalIslamicBank` WHERE `accnumber`='$accnumb'"));
if($x2[0]<500){echo "<script>alert('عذراً رصيدك أقل من الرصيد المسموح لإتمام العملية')</script>";}
else{
echo "<script>window.open('paymentagree.php','_self')</script>";
mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='t' WHERE `accnumber`=$accnumb");
}}

else{echo "<script>window.open('bankmsg.php','_self')</script>";}

}	
	
}


if(isset($_POST['cancel'])){ /*'اذا تم الضغط على رجوع'*/
//mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
$x1=mysqli_fetch_array(mysqli_query($con,"select `passtype` from `passport` where `checkk`='t'"));
if ($x1[0]=="child"){
mysqli_query($con,"DELETE FROM `passport` WHERE `checkk`='t'");
echo "<script>window.open('child.php','_self')</script>";}
else {
mysqli_query($con,"DELETE FROM `passport` WHERE `checkk`='t'");
echo "<script>window.open('msg.php','_self')</script>";}
}

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