<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>إدخال البيانات</title>
        <link rel="stylesheet" href="atm/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="atm/css/custom.css"/>
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
                        <h3 align="center"></i>قم بإدخال البيانات المطلوبة</h3>
                    </div>
					<hr/>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>
								<div class="form-group">
                                    <label>الإسم الرباعي</label>
									<input class="form-control" name="name" type="text"  required placeholder="">
								</div>

                               <div class="form-group">
                                    <label>الرقم الوطني</label>
									<input class="form-control" name="u" type="text"  required placeholder="">
								</div>

                                    <label>الصورة الشخصية</label>
                               <form action="/action_page.php">
                               <input type="file" name="pic" accept="image/*">
                               <input type="submit">
                               </form>


								<?php
									if(isset($_POST['submit']))
									{//1st starts
										$n = ucwords($_POST['name']);
										$u = $_POST['u'];
										$p = $_POST['p'];
										if(mysqli_query($con,"insert into manager (name,user,pass)
                                        values('$n','$u','$p')")){
                                            echo "<script>alert('Manager has been Inserted...')</script>";
                                            echo "<script>window.open('index.php?m','_self')</script>";
										}
										else{
											echo "<script>alert('Error!!!')</script>";
										}
                                    }// isset bracket ends here
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