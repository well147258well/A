<?php

$no=$_GET["no"];

$Link=mysqli_connect("localhost","root","well987654well","well");
$del="DELETE FROM exam WHERE no=" .$no;
mysqli_query($Link,$del);

$read="SELECT * FROM user ";
$readresult=mysqli_query($Link,$read);

echo "<table border='1'>";
echo "<tr><td>使用者編號</td><td>使用者姓名</td><td>使用者密碼</td><td>刪除資料</td></tr>";

while($result=mysqli_fetch_array($readresult)){
echo "<tr>";
echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td>";
echo "<td><a href='delete.php?no=".$result[0]."'><input type="button" value='確定刪除></a></td>";
echo "</tr>";
}
echo "<a href='index.php?no=".$result[0]."'>回上一頁</a>";
mysqli_free_result($readresult);
mysqli_close(Link);

?>