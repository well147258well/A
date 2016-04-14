<html>
<head>
	<title></title>
</head>
<body>

<h2>註冊使用者</h2>
<form action="" method="post">
請輸入姓名:<input type="text" name="name"><br>
請輸入密碼:<input type="password" name="pwd"><br>
請輸入信箱:<input type="text" name="email"><br>
請輸入電話:<input type="text" name="phone"><br>
<input type="submit">
<input type="reset">
</form>

<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$times=0;
date_default_timezone_set('Asia/Taipei');
$datetime = date ("Y- m - d / H : i : s"); 
//新增資料
$Link=mysqli_connect("localhost","root","well987654well","well");
$add="INSERT INTO exam(name,pwd,email,phone,times,lasttime) VALUES('$name','$pwd','$email','$phone','$times','$datetime')";
mysqli_query($Link,$add);
//讀取資料
$read="SELECT * FROM exam";
$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>使用者編號</td><td>使用者姓名</td><td>使用者密碼</td><td>登入次數</td><td>上次登入時間</td><td>更新資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[5]."</td><td>".$result[6]."</td>";
	echo "<td><a href='update.php?no=".$result[0]."'>更新資料</td>";
	echo "</tr>";
}
	echo "</table>";
}


?>

</body>
</html>