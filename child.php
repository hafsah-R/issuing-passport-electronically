<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>
        <meta charset="utf8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>البيانات الشخصية</title>
        <link rel="stylesheet" href="style/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style/css/custom.css"/>

          <script type="text/javascript">


		    window.onload=function(){

		// Restricts input for the given textbox to the given inputFilter.
		function setInputFilter(textbox, inputFilter) {
		  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
		    textbox.addEventListener(event, function() {
		      if (inputFilter(this.value)) {
		        this.oldValue = this.value;
		        this.oldSelectionStart = this.selectionStart;
		        this.oldSelectionEnd = this.selectionEnd;
		      } else if (this.hasOwnProperty("oldValue")) {
		        this.value = this.oldValue;
		        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
		      }
		    });
		  });
		}


		// Install input filters.
		setInputFilter(document.getElementById("enText1"), function(value) {
		  return /^[a-z" "]*$/i.test(value); });
		  
		  setInputFilter(document.getElementById("enText2"), function(value) {
		  return /^[a-z" "]*$/i.test(value); });
		  
		  setInputFilter(document.getElementById("enText3"), function(value) {
		  return /^[a-z" "]*$/i.test(value); });
		  
		  setInputFilter(document.getElementById("enText4"), function(value) {
		  return /^[a-z" "]*$/i.test(value); });

		    }

		</script>

		  <script>
		    // tell the embed parent frame the height of the content
		    if (window.parent && window.parent.parent){
		      window.parent.parent.postMessage(["resultsFrame", {
		        height: document.body.getBoundingClientRect().height,
		        slug: "zgvtjc51"
		      }], "*")
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


		<div class="container-fluid" style="background: #f3f3f3; background-image:url('image.jpg'); height:920px; margin-top:0px;">

            <div class="col-md-12 " align="center" >
                <div class="login-panel panel panel-default" align="right" style="border-radius:10px; width:800px; box-shadow:2px 2px 2px 0px; margin-top:20px;">
                    <div>
                        <h3 align="center"></i>البيانات الشخصية</h3>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">
							<fieldset>
								<div class="form-group">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";
$con = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($con,"utf8");

$i=0;
$value=0;
$nameenglish="";
$x=mysqli_query($con,"select * from civilregistry");
while($row=mysqli_fetch_array($x)){
if($row['checkk']=='t')

break;

$i++;
}
echo ":الإسم";
echo "<br>";
echo $row['name'];
echo "<br>";
echo ":الرقم الوطني";
echo "<br>";
echo $row['nationalnumb'];
echo "<br>";
echo ":تاريخ الميلاد";
echo "<br>";
echo $row['birthdate'];
echo "<br>";
echo ":مكان الميلاد";
echo "<br>";
echo $row['birthplace'];
echo "<br>";
$image=$row['image'];
echo '<img src='.$image.' height="150" width="130"/>';
?>


					            <hr/>
                                <div>
					                 <h3 align="center"></i>قم بإدخال البيانات التالية</h3>
                                </div>
								<label>بصمة ولي الامر</label><br>
							    <input type="file" name="fingerprint" accept="image/*"><br>
                                <br>
                                <label>الإسم الرباعي باللغة الإنجليزية</label><br>
								<label>1</label>
     							<input id="enText1" name="name" type="text" size="10" autocomplete="off" required placeholder="">
								<label>2</label>
								<input id="enText2" name="name1" type="text" size="10" autocomplete="off" required placeholder="">
								<label>3</label>
								<input id="enText3" name="name2" type="text" size="10" autocomplete="off" required placeholder="">
								<label>4</label>
								<input id="enText4" name="name3" type="text" size="10" autocomplete="off" required placeholder="">
								</div>
								
								<label>قم بإضافة صورة شخصية</label><br>
							    <input type="file" name="image" accept="image/*"><br>


								<label>نوع الجواز</label><br>
								<select name="passtype">
								<option value=1 name="passtype">عادي</option>
								<option value=2 name="passtype">طالب</option>
								<option value=3 name="passtype">طفل</option>
								</select><br>
                                <br>



                                <label>إختر الفرع الذي سيتم الإستلام منه</label><br>
								<select name="branch">
								<option value="khartoum" name="branch">مجمع الخرطوم</option>
								<option value="omdurman" name="branch">مجمع أم درمان</option>
								<option value="bahri" name="branch">مجمع بحري</option>
                                </select><br>
                                <br>


							    <textarea readonly>
								1. جواز السفر وثيقة شخصية وأمنية مهمة بالغة الخطورة الأمر الذي يتطلب مراجعة صاحب العلاقة دون سواه، وولي الأمر بالنسبة للقصر.
								2. جواز السفر وثيقة رسمية مهمة لمن صدرت باسمه، وعليه واجب المحافظة عليه وهو مسؤول عنه نظاماً، ولا يجوز استعماله أو محاولة استعماله من قبل شخص آخر ليس له الحق في ذلك، جواز السفر صالح لمدة خمس سنوات من تاريخ صدوره، أو إلى أن تنتهـي صفحاته أيهما أسبق.
								3. يجب عدم استعمال جواز سفر غير عائد له أو الاحتفاظ بأكثر من جواز سفر عادي صالح للاستعمال أو تحريف أو تعديل أو إضافة أي معلومات أو بيانات أو أختام جواز السفر العائد لك شخصياً ومن يخالف ذلك يكون عرضه للعقوبات المقررة نظاماً.
								4. يجب ملاحظة سريان مفعول جواز سفرك قبل السفر إلى الخارج بوقت كاف حتى لاتتعرض للتعطيل فإذا كنت قاصداً السفر إلى الدول العربية فيجب أن يكون جواز سفرك ساري المفعول لمدة لا تقل عن ثلاثة أشهر، أما في حال السفر إلى الدول الأخرى فينبغي أن تكون المدة المتبقية في صلاحية جواز السفر أكثر من ستة أشهر.
								5. ينص النظام على عقوبات مشددة على كل مواطن يفقد جواز سفره أو يتهاون في المحافظة عليه أو يعطيه لغيره للتصرف به.
								</textarea><br>
                                <input type="checkbox" name="conditions" checked> أوافق على الشروط والاحكام</input><br>

								<?php
								$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epassport";
$con = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($con,"utf8");

$i=0;
$value=0;
$x=mysqli_query($con,"select * from civilregistry");
while($row=mysqli_fetch_array($x)){
if($row['checkk']=='t')

break;

$i++;
}
								
$fnationalnumb=$row['fnationalnumb'];
//$image1=0;

if(isset($_POST['submit'])){ /*'اذا تم الضغط على submit'*/

$fingprint1 = $_FILES['fingerprint']['tmp_name'];
$fingprint1 = file_get_contents($fingprint1);

$fingprint2 = mysqli_fetch_array(mysqli_query($con,"SELECT `fingerprint` FROM `civilregistry` WHERE `nationalnumb`=$fnationalnumb"));
$fingprint2 = file_get_contents($fingprint2[0]);

$image1md5=md5($fingprint1);
$image2md5=md5($fingprint2);

if($image1md5==$image2md5){
//if($image1!=0){
if(isset($_POST['conditions'])){

$name= $row['name'];
$nationalnumb= $row['nationalnumb'];
$birthdate= $row['birthdate'];
$birthplace= $row['birthplace'];
$nameenglish .= " ".$_POST['name'];
$nameenglish .= " ".$_POST['name1'];
$nameenglish .= " ".$_POST['name2'];
$nameenglish .= " ".$_POST['name3'];
if(isset($_FILES['image'])){
$image=addslashes(file_get_contents( $_FILES['image']['tmp_name']));
}

$passtype = $_POST['passtype'];
$branch = $_POST['branch'];

//if(isset($_POST['image'])){
//$image2 = $_FILES['image']['tmp_name'];
//$image2 = file_get_contents($image2);
//$image3md5=md5($image2);



//if($image3md5!=0){
if(isset($_FILES['image'])){
if($branch=="khartoum"){
mysqli_query($con,"INSERT INTO `khartoumPassport`(`nationalnumb`, `name`, `passnumber`,`birthdate`,`birthplace`,`gender`, `releasedate`, `releaseplace`, `passtype`, `nameenglish`,`passnumber+`,`image`, `checkk`) VALUES ('$nationalnumb','$name',0,'$birthdate','$birthplace',0,0,'$branch','$passtype','$nameenglish',0,'$image1','t')");
}
else if($branch=="omdurman"){
mysqli_query($con,"INSERT INTO `omdurmanPassport`(`nationalnumb`, `name`, `passnumber`,`birthdate`,`birthplace`,`gender`, `releasedate`, `releaseplace`, `passtype`, `nameenglish`,`passnumber+`,`image`, `checkk`) VALUES ('$nationalnumb','$name',0,'$birthdate','$birthplace',0,0,'$branch','$passtype','$nameenglish',0,'$image1','t')");
}
else if($branch=="bahri"){
mysqli_query($con,"INSERT INTO `bahriPassport`(`nationalnumb`, `name`, `passnumber`,`birthdate`,`birthplace`,`gender`, `releasedate`, `releaseplace`, `passtype`, `nameenglish`,`passnumber+`,`image`, `checkk`) VALUES ('$nationalnumb','$name',0,'$birthdate','$birthplace',0,0,'$branch','$passtype','$nameenglish',0,'$image1','t')");
}


echo "<script>window.open('payment.php','_self')</script>";
}else {echo "<script>alert('رجاء قم بإضافة صورة شخصية')</script>";}
}else {echo "<script>alert('تجب الموافقة على الأحكام و الشروط')</script>";}
}else{echo "<script>alert('بصمة ولي الامر غير مطابقة')</script>";}
}


if(isset($_POST['cancel'])){ /*'اذا تم الضغط على إلغاء'*/
mysqli_query($con,"UPDATE `civilregistry` SET `checkk`='f' WHERE `checkk`='t'");
mysqli_query($con,"DELETE from `omdurmanPassport` WHERE `checkk`='t'");
mysqli_query($con,"DELETE from `khartoumPassport` WHERE `checkk`='t'");
mysqli_query($con,"DELETE from `bahriPassport` WHERE `checkk`='t'");
echo "<script>window.open('index.php','_self')</script>";}


?>

								
								
							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> </i> إصدار الجواز </button>
                                <button name="cancel" type="submit" value="Cancel" formnovalidate class="btn btn-success" style="padding:12px 20px;"> </i> رجوع </button>
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>

</html>