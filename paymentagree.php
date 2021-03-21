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

            <div class="col-md-15 "align="right">


                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-5px;">
							<fieldset>

<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "epassport";
								$con = mysqli_connect($servername, $username, $password, $dbname);
                                
								//$row1=5;
								//$row2=5;
								//$row3=5;

								$x=mysqli_query($con,"select passtype from khartoumpassport where checkk='t'");
								$row1 = mysqli_fetch_array($x);
								
								$y=mysqli_query($con,"select passtype from bahriPassport where checkk='t'");
								$row2 = mysqli_fetch_array($y);
								
								$z=mysqli_query($con,"select passtype from omdurmanPassport where checkk='t'");
								$row3 = mysqli_fetch_array($z);
								//--------------------------------------------------------------------
								
								$row4='q';
								$row5='q';
								

								$a=mysqli_query($con,"select checkk from OmdurmanNationalBank where checkk='t'");
								$row4 = mysqli_fetch_array($a);
								
								$b=mysqli_query($con,"select checkk from FeisalIslamicBank where checkk='t'");
								$row5 = mysqli_fetch_array($b);
								
								
								
								



								

                                    if($row1['passtype']!=null){
										
								      if($row1['passtype']==1){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 450 جنيه إضغط موافق لإتمام عملية الدفع";
					                  }
								      if($row1['passtype']==2){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 350 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
								      if($row1['passtype']==3){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 250 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
										
									if(isset($_POST['submit'])){
                                    $dte=date("Y-m-d");
                                    $passnumber1=mysqli_fetch_array(mysqli_query($con,"SELECT `passnumber+` FROM `khartoumpassport` WHERE `checkk`='a'"));
								    if($passnumber1[0]>3900283492){
								    $passnumber2=($passnumber1[0]+1);}
								    else {$passnumber2=3900283493;}
                                    mysqli_query($con,"UPDATE `khartoumpassport` SET `checkk`='f' WHERE `checkk`='a'");
                                    
									if($row4['checkk']=='t'){
									if($row1['passtype']==1){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row1['passtype']==2){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row1['passtype']==3){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    }  
									else if($row5['checkk']=='t'){
									if($row1['passtype']==1){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row1['passtype']==2){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row1['passtype']==3){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `khartoumpassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    }
									
									}
									}else  if($row2['passtype']!=null){
										
										if($row2['passtype']==1){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 450 جنيه إضغط موافق لإتمام عملية الدفع";
					                  }
								      if($row2['passtype']==2){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 350 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
								      if($row2['passtype']==3){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 250 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
										
									if(isset($_POST['submit'])){
                                    $dte=date("Y-m-d");
                                    $passnumber1=mysqli_fetch_array(mysqli_query($con,"SELECT `passnumber+` FROM `bahriPassport` WHERE `checkk`='a'"));
								    if($passnumber1[0]>4700283453){
								    $passnumber2=($passnumber1[0]+1);}
								    else {$passnumber2=4700283454;}
                                     mysqli_query($con,"UPDATE `bahriPassport` SET `checkk`='f' WHERE `checkk`='a'");
                                     
									if($row4['checkk']=='t'){
									if($row2['passtype']==1){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row2['passtype']==2){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row2['passtype']==3){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    }  
									else if($row5['checkk']=='t'){
									if($row2['passtype']==1){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row2['passtype']==2){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row2['passtype']==3){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `bahriPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    } 
									 
									
                                    }
									}  else  if($row3['passtype']!=null){
										
										if($row3['passtype']==1){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 450 جنيه إضغط موافق لإتمام عملية الدفع";
					                  }
								      if($row3['passtype']==2){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 350 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
								      if($row3['passtype']==3){ /*'التحقق من نوع الجواز'*/
								      echo "الرسوم الاجمالية هي 250 جنيه إضغط موافق لإتمام عملية الدفع";
								      }
										
									if(isset($_POST['submit'])){
                                    $dte=date("Y-m-d");
                                    $passnumber1=mysqli_fetch_array(mysqli_query($con,"SELECT `passnumber+` FROM `omdurmanPassport` WHERE `checkk`='a'"));
								    if($passnumber1[0]>2600283447){
								    $passnumber2=($passnumber1[0]+1);}
								    else {$passnumber2=2600283448;}
                                     mysqli_query($con,"UPDATE `omdurmanPassport` SET `checkk`='f' WHERE `checkk`='a'");

									if($row4['checkk']=='t'){
									if($row3['passtype']==1){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row3['passtype']==2){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row3['passtype']==3){
									mysqli_query($con,"update OmdurmanNationalBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    }  
									else if($row5['checkk']=='t'){
									if($row3['passtype']==1){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-450) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`='$passnumber2' ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row3['passtype']==2){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-350) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}

                                    if($row3['passtype']==3){
									mysqli_query($con,"update FeisalIslamicBank set amt=(amt-250) where checkk='t'");
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `omdurmanPassport` SET `releasedate`='$dte', `passnumber`='B$passnumber2', `passnumber+`=$passnumber2 ,`checkk`='a' WHERE `checkk`='t'");
									mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('finalpage.php','_self')</script>";}
                                    }
									
                                    }
									}


                                    
                                    if(isset($_POST['cancel'])){ /*'اذا تم الضغط على رجوع'*/
									if($row4['checkk']=='t'){
			                        mysqli_query($con,"UPDATE `OmdurmanNationalBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('payment.php','_self')</script>";}
                                    
									else if($row5['checkk']=='t'){
									mysqli_query($con,"UPDATE `FeisalIslamicBank` SET `checkk`='f' WHERE `checkk`='t'");
                                    echo "<script>window.open('payment.php','_self')</script>";}
									
									}
									
									
                                    

								?>









							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> </i> موافق  </button>
                                <button name="cancel" type="submit" value="Cancel" formnovalidate class="btn btn-success" style="padding:12px 20px;"> </i> رجوع </button>
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>