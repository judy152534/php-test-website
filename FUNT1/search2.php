<?php
$host = '';
//改成你登入phpmyadmin帳號
$user = '';
//改成你登入phpmyadmin密碼
$passwd = '';
 
$database = '';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
//echo "連線成功";
 

//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");

echo "<center><FONT SIZE='5' COLOR='#66CCFF'>您的搜尋結果!!</FONT><BR><BR>\n";

if($_POST['act_name']!='' or $_POST['timer']!=''){
	$act_name=$_POST['act_name'];
	$timer=$_POST['timer'];

//選擇資料表user，條件是欄位id = 1的
$selectSql = "select * from tbl_ms2 where act_name like '%$act_name%' or timer like '$timer'";
//呼叫query方法(SQL語法)
$memberData = $connect->query($selectSql);
//有資料筆數大於0時才執行
if ($memberData->num_rows > 0) {
	//讀取剛才取回的資料
	while ($row = $memberData->fetch_assoc()) {
	  
		echo	"<table style='margin:10px auto;width: 1000px;background-color:#666666;border-spacing: 1px'>".
				"<tr style='background-color: #BDBDBD'>".
				
				"	<th>活動序號</th>".
				"	<td>".$row["act_id"]."</td>".
				"	<td rowspan=6><form action='utility/server.php' method='post'><input type='submit' value='我要參加' name='submit'></form></td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>活動名稱</th>".
				"	<td>".$row["act_name"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>主揪</th>".
				"	<td>".$row["username"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>地點</th>".
				"	<td>".$row["loc"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>時間</th>".
				"	<td>".$row["timer"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>限制人數</th>".
				"	<td>".$row["limitpeo"]."</td>".
				"</tr>".
				"</table>";
		//---
		echo	"</table>"	;}}}
?>
