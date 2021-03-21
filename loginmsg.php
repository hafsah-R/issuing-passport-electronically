

<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>بيانات غير صحيحة</title>
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



		<div class="container-fluid" style="background: #f3f3f3; background-image:url('bank.jpg'); height:657px; margin-top:0px;">

            <div class="col-md-12 " align="center" >
                <div class="login-panel panel panel-default" align="right" style="border-radius:10px; width:800px; box-shadow:2px 2px 2px 0px; margin-top:20px;">
                    <div>
                        <h3 align="center"></i>اسم المستخدم او كلمة السر غير صحيحة</h3>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                		<div class="panel-body" style="margin-top:-15px;">
							<fieldset>

<?php
if(isset($_POST['submit'])){ /*'اذا تم الضغط على submit'*/
echo "<script>window.open('report.php','_self')</script>";
}

?>


							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> </i> رجوع </button>
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>