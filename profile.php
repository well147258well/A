<?php

$no=$_GET["no"];
$Link=mysqli_connect("localhost","root","well987654well","well");

$read="SELECT * FROM exam WHERE no=".$no;
$readresult=mysqli_query($Link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='index.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";
echo "姓名:<input type='text' name='name' value='".$result[1]."'><br/>";
echo "密碼:<input type='text' name='pwd' value='".$result[2]."'><br/>";
echo "信箱:<input type='text' name='pwd' value='".$result[3]."'><br/>";
echo "電話:<input type='text' name='pwd' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

mysqli_free_result($readresult);
mysqli_close(Link);
?>
