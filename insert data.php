<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="إدخال البيانات">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styleP.css">
</head>
<title>إدخال البيانات</title>
<body>
<div class="container">
<?php
$nationalNo=$pic="";
<form action="payment.html" method="post" accept="image.gif,image.jpg" >
<label for="Nnumber">ادخل الرقم الوطني</label>
<input type="text" name="Nnumber"></input>
$_post["Nnumber"];
<label for="fngerPrint">البصمة</label>
<input type="file" name="fngerPrint" id="pic"></input>
/*$_post["fngerPrint"];
$_server[""];
function test($data){
	$data=trim(data);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if((empty $post["Nnumber"])){
		$nationalNo="لايمكن ترك الحقل فارغ";
	}else{
		$Nnumber=$_post["Nnumber"];}
if(!preg_match("12346790")){
	$nationalNo="ادخل ارقام فقط";
}*/
<input type="submit" value="التالي"></input>
?>
</form>
<div>
</body>