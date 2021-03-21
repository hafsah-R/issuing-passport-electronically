

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




		<div class="container-fluid" style="background: #f3f3f3; background-image:url('image.jpg'); height:657px; margin-top:0px;">

            <div class="col-md-12 " align="center" >
                <div class="login-panel panel panel-default" align="right" style="border-radius:10px; width:800px; box-shadow:2px 2px 2px 0px; margin-top:20px;">
                    <div>
                        <h3 align="center"></i>قم بإدخال البيانات المطلوبة</h3>
                    </div>
					<hr/>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>

                                <div class="form-group">
                                <label>الرقم الوطني</label>
						        <input class="form-control" name="nationalnumber" type="int" autocomplete="off"  required placeholder="">
								</div>

							    <label>البصمة</label><br>
							    <input type="file" name="fingprint" accept="image/*"><br>








								<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";

								$con = mysqli_connect($servername, $username, $password, $dbname);

									if(isset($_POST['submit'])){ /*'اذا تم الضغط على submit'*/

										$numb = $_POST['nationalnumber'];

										$i=0;
										$ii=0;
										$value=0;
										$value1=0;



										$x=mysqli_query($con,"select nationalnumb from civilregistry");
										while($row=mysqli_fetch_array($x))
										{
										if($numb==$row['nationalnumb'])
										$value=1;
										$i++;
										}

                                        if($value==1){ /*'التحقق من وجود رقم وطني'*/

                                        $fingprint1 = $_FILES['fingprint']['tmp_name'];
                                        $fingprint1 = file_get_contents($fingprint1);

                                        $fingprint2 = mysqli_fetch_array(mysqli_query($con,"SELECT `fingerprint` FROM `civilregistry` WHERE `nationalnumb`=$numb"));
                                        $fingprint2 = file_get_contents($fingprint2[0]);

                                        $image1md5=md5($fingprint1);
										$image2md5=md5($fingprint2);

                                        if($image1md5==$image2md5){//"التحقق من مطابقة البصمة"

                                        $x1=mysqli_query($con,"select nationalnumb from khartoumPassport");
										while($row=mysqli_fetch_array($x1))
									    {
										if($numb==$row['nationalnumb'])
										$value1=1;
										$ii++;
										}

										$x2=mysqli_query($con,"select nationalnumb from bahriPassport");
										while($row=mysqli_fetch_array($x2))
									    {
										if($numb==$row['nationalnumb'])
										$value1=1;
										$ii++;
										}
										
										$x3=mysqli_query($con,"select nationalnumb from omdurmanPassport");
										while($row=mysqli_fetch_array($x3))
									    {
										if($numb==$row['nationalnumb'])
										$value1=1;
										$ii++;
										}
										
                                        if($value1==1){ /*'التحقق من عدم وجود جواز'*/
                                        echo "<script>window.open('msg2.php','_self')</script>";}

                                        else{//"لا يوجد جواز مرتبط بالرقم الوطني"
                                        $dte=date("Y");
                                        $x2=mysqli_fetch_array( mysqli_query($con,"select birthdate from civilregistry where nationalnumb=$numb"));

										if(($dte-$x2[0])<=16){//"التحقق من ان صاحب الرقم الوطني طفل"
										mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='t' WHERE `nationalnumb`=$numb");
										echo "<script>window.open('child.php','_self')</script>";}

                                        else{//"صاحب الرقم الوطني بالغ"
                                        $sql ="UPDATE `civilregistry` SET `checkk`='t' WHERE `nationalnumb`='$numb'";

                                        //$sql = "INSERT INTO `passport` (nationalnumb,name,passnumber,releasedate,releaseplace,passtype,image,checkk)
                                        //VALUES('$numb','$name',NULL,NULL,'$branch','$passtype','$image','t')";

									    if(mysqli_query($con,$sql)){echo "<script>window.open('msg.php','_self')</script>";}
										else{echo "<script>alert('Error!!!')</script>";}

										}//else"صاحب الرقم الوطني بالغ" ends here
										}//else"لا يوجد جواز مرتبط بالرقم الوطني" ends here

                                        }else
                                        {echo "<script>alert('البصمة غير مطابقة')</script>";}


                                        }else//"الرقم الوطني غير صحيح"
                                        echo "<script>window.open('msg3.php','_self')</script>";


                                        }//if isset ends here

                                        if(isset($_POST['cancel'])){ /*'اذا تم الضغط على إلغاء'*/
                                        echo "<script>window.open('index.php','_self')</script>";}



								?>
							</fieldset>

						</div>
						<div class="panel-footer">
                             <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"></i>موافق</button>
                                <button name="cancel" type="submit" value="Cancel" formnovalidate class="btn btn-success" style="padding:12px 20px;"> </i> إلغاء </button>

                             </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>