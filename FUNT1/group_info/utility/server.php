<html>


<div class="header">
  <h1>FunTOGet</h1>
</div>

<div class="navbar">
  <a href="http://localhost/FUNT1/index.php">首頁</a>
  <a href="http://localhost/FUNT1/signin.php">登入/註冊</a>
  <a href="http://localhost/FUNT1/insert.php">我要開團</a>
</div>

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

echo "<BR><BR><center><FONT SIZE='5' COLOR='#66CCFF'>揪團細節!!</FONT><BR><BR>\n";

//選擇資料表user，條件是欄位id = 1的
$selectSql = "SELECT * FROM tbl_ms2 WHERE act_id = 1";
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
				"	<td rowspan=6><form action='session.php' method='post'><input type='submit' value='我要參加' name='submit'></form></td>".
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
		echo	"</table>"	;
       /*echo "揪團名稱：". $row['act_name']."<br>";
       echo "揪團種類：". $row['type']."<br>";
       echo "主揪：". $row['username']."<br>";
       echo "地點：". $row['loc']."<br>";
       echo "集合時間：". $row['timer']."<br>";
       echo "限制人數：". $row['limitpeo']."<br>";*/
	}
} else {
	echo '0筆資料';
}
echo "<BR><BR><center><FONT SIZE='5' COLOR='#66CCFF'>目前成員!!</FONT><BR><BR>\n";
$selectSql = "SELECT tbl_ms4.username
    From tbl_ms2
    INNER JOIN tbl_ms4 ON tbl_ms2.act_id=tbl_ms4.act_id
    WHERE tbl_ms4.act_id='1' ";
//$sql = "SELECT * FROM users WHERE  u_name ='".$name."'";
//呼叫query方法(SQL語法)
$memberData = $connect->query($selectSql);
if ($memberData->num_rows > 0) {
	//讀取剛才取回的資料
	while ($row = $memberData->fetch_assoc()) {
			
		echo	"<table style='margin:10px auto;width: 1000px;background-color:#666666;border-spacing: 1px'>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th style='width: 200px'>name</th>".
				"	<td style='width: 800px'>".$row["username"	]."</td>";		
		//---
		}echo	"</tr>"."</table>"	;
} else {
	echo '0筆資料';
}
echo "<BR><BR><center><FONT SIZE='5' COLOR='#66CCFF'>本團留言板!!</FONT><BR><BR>\n";
//選擇資料表user，條件是欄位id = 1的
$selectSql = "SELECT * FROM tbl_ms1 WHERE liuyan_id = 1";
//呼叫query方法(SQL語法)
$memberData = $connect->query($selectSql);
//有資料筆數大於0時才執行
if ($memberData->num_rows > 0) {
	//讀取剛才取回的資料
	while ($row = $memberData->fetch_assoc()) {
		 
		echo	"<table style='margin:10px auto;width: 1000px;background-color:#666666;border-spacing: 1px'>".
				"<tr style='background-color: #BDBDBD'>".

				"	<th>留言序號</th>".
				"	<td>".$row["liuyan_id"]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>帳號</th>".
				"	<td>".$row["user"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>標題</th>".
				"	<td>".$row["title"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>作者</th>".
				"	<td>".$row["author"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>留言內容</th>".
				"	<td>".$row["liuyan"	]."</td>".
				"</tr>".
				"<tr style='background-color: #BDBDBD'>".
				"	<th>留言時間</th>".
				"	<td>".$row["time"]."</td>".
				"</tr>".
				"</table>";
		//---
		echo	"</table>"	;}}

//結果:Array ( [id] => 1 [account] => test [password] => 123 [nickname] => 測試 )
?>
<body>
    <form action = "../../doAdd.php" method = "post"> 
    <link rel="stylesheet" type="text/css" href="s1.css">
    <div style="text-align:center;background-color:#C0E1FF;display: block;
    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;border-bottom: 1px solid #B8DDFF;
    padding: 10px 10px 10px 20px;">
    <h1>我要留言!!
    <span>和大家說個話吧</span>
    </h1>
    </div>
    <label>
    <span>你的名字 :</span>
    <input type="text" name="author" placeholder="Your Full Name" />
    </label>

    <label>
    <span>留言標題 :</span>
    <input type="text" name="title" placeholder="Please input title" />
    </label>

    <label>
    <span>留言內容 :</span>
    <textarea name="content" placeholder="Your Message to Us"></textarea>
    </label>
    <div style="margin-left:125px">
    <input type="submit" value="提交" class="submit">
    <input type = "reset" value = "重置" class="reset">
    </div>
	</div>
    </form>
</body>    
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
html,body{
  height: 100%;
  }

.header {
  background-color:  #ABEBC6 ;
  border: 1px solid  #ABEBC6;
  padding: 10px;
  height: 120px;
  width:100%;
  /*position: fixed;
  top: -5px;*/
 }
 /* the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
  width:100%;
  /*position: fixed;
  top: 115px;*/
}

/* the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
.row {  
  display: flex;
  flex-wrap: wrap;
}

.menu {
  background-color: #F0F3F4 ;
  flex: 35%;
  float: left;
  padding: 15px;
  border: 0px 0px 1px 0px solid gray;
  min-height: 100%;
  padding-top:50px;
  padding-bottom:50px;
  overflow: hidden;
}
.menu1{
  font-weight:bold;
}
.meni {
  padding:5px 10px; 
  background-color:#F0F3F4; 
  border:0 none;
  
  }
.menj {
  width:200px;
  height:30px;
  background-color:#FFFFFF; 
  cursor:pointer;
  border-radius: 5px;
 
}
.menk {
  width:200px;
  height:30px;
  background-color:#FFFFFF; 
  cursor:pointer;
  border-radius: 5px; 
}


input[type=button] {
  background-color: #58D68D;
  border: none;
  color: #000000;;
  padding: 10px 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

.main {
  flex: 65%;
  float: left;
  padding: 15px;
  min-height: 100%;
  padding-top:50px;
  padding-bottom:50px;
}
img {
  width: 900px;
  height: 500px;
  float: left;
}
.container-white{
  float: top;
  padding-bottom:2px;
}
.box-shadow{
    box-shadow: 10px 10px 5px grey;
    float: left;
}

.hover-opacity:hover {
  opacity: 0.5
}
.footer{
    background-color:  #ABEBC6 ;
    padding: 10px;
    text-align: center;
    position: fixed;
    width: 100%;
    bottom:0px; 
    left:8px;
}

/* Responsive layout - when the screen is less than 700px wide, 
make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>
</head>
<body> 
    
    
    
    
</html>