<html>
<body>

<form action="" method="post">

<?php
echo "歡迎回來";
$Link=mysqli_connect("localhost","root","well987654well","well");
$read="SELECT * FROM exam";
$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>使用者姓名</td><td>使用者密碼</td><td>登入次數</td><td>上次登入時間</td><td>更新資料</td><td>刪除帳號</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[5]."</td><td>".$result[6]."</td>";
	echo "<td><a href='profile.php?no=".$result[0]."'>更新資料</td>";
	echo "<td><a href='checkdel.php?no=".$result[0]."'>刪除帳號</td>";
	echo "</tr>";
}
	echo "</table>";
}

?>

請輸入姓名:<input type="text" name="name"><br>
請輸入密碼:<input type="password" name="pwd"><br>
<input type="submit">
<input type="reset">


</form>

</body>
</html>