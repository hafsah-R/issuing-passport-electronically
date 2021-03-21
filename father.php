<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ولي الأمر</title>
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
                padding-bottom: 10px;
            }
        </style>
    </head>



	    <br/>

            <div class="col-md-4 ">
                <div class="login-panel panel panel-default" style="border-radius:0px; box-shadow:2px 2px 2px 0px;">
                    <div>
                        <h3 align="center"></i>قم بإدخال الرقم الوطني لولي الأمر</h3>
                    </div>
					<hr/>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>
								<div class="form-group">

									<input class="form-control" name="nationalnumber" type="text" autocomplete="off" required placeholder="">
								</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){ /*'اذا تم الضغط على submit'*/
$nationalnumb = $_POST['nationalnumber'];

$i=0;
$ii=0;
$value=0;
$value1=0;



$x=mysqli_query($con,"select fnationalnumb from civilregistry where checkk='t'");
$row=mysqli_fetch_array($x);

if($row[0]==$nationalnumb){ /*'التحقق من مطابقة الرقم الوطني'*/
$x1=mysqli_query($con,"select nationalnumb from passport");
while($row=mysqli_fetch_array($x1))
{
if($nationalnumb==$row['nationalnumb'])
$value1=1;
$ii++;
}
if($value1==1){ /*'التحقق من وجود جواز'*/
echo "<script>window.open('payment.php','_self')</script>";}
else{echo "<script>alert('لا يوجد جواز لولي الأمر')</script>";}
}else echo "<script>alert('الرقم الوطني غير مطابق')</script>";

}//ifsubmit
?>


							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> <i class="glyphicon glyphicon-send"></i> Submit  </button>
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>