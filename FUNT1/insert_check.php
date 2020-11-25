<html>
<head>
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

<div class="header">
  <h1>FunTOGet</h1>
</div>

<div class="navbar">
  <a href="#">首頁</a>
  <a href="signin.php">登入/註冊</a>
  <a href="insert.php">我要開團</a>
</div>
<?php 
include "setup.php"; // 連結設定檔

$back_name = "insert.php";// 前一支php的檔名

// 使用者輸入變數
$user = $_REQUEST['user'];
$pasd = $_REQUEST['pasd'];
$act_name = $_REQUEST['act_name'];
$type = $_REQUEST['type'];
$loc = $_REQUEST['loc'];
$timer = $_REQUEST['timer'];
$limitpeo= $_REQUEST['limitpeo'];



// 確認資料是否輸入正確
if ($user == ''){
  $err_message = "使用者帳號未輸入!!";
  header("location: ./".$back_name."?err_message=".$err_message);
  exit;
}

if ($pasd == ''){
  $err_message = "使用者密碼未輸入!!";
  header("location: ./".$back_name."?err_message=".$err_message);
  exit;
}


$user_tablename = "tbl_ms"; //資料表名稱

// 確認此帳號是否存在
$sql = "select count(*) from ".$user_tablename;
$sql .= " where `username` = '".$user."' and `password` = '".$pasd."'";
$sql_result = mysql_query($sql) or die($sql."sql語法有誤!!");
$row = mysql_fetch_array($sql_result);
if ($row[0]==0){
  $err_message = "很抱歉，您並非".$unit_name."的使用者，請重新輸入帳號!!";
  header("location: ./".$back_name."?err_message=".$err_message);
  exit;
}

// 確認公告輸入之資料是否正確
if ($act_name == ''){
  $err_message = "揪團名稱未輸入!!";
  header("location: ./".$back_name."?err_message=".$err_message);
  exit;
}

if ($type== ''){
  $err_message = "揪團種類未輸入!!";
  header("location: ./".$back_name."?err_message=".$err_message);
  exit;
}

if ($loc== ''){
	$err_message = "揪團地點未輸入!!";
	header("location: ./".$back_name."?err_message=".$err_message);
	exit;
}

if ($timer== ''){
	$err_message = "揪團時間未輸入!!";
	header("location: ./".$back_name."?err_message=".$err_message);
	exit;
}

if ($limitpeo== ''){
	$err_message = "揪團人數限制未輸入!!";
	header("location: ./".$back_name."?err_message=".$err_message);
	exit;
}


$user_tablename_1 = "tbl_ms2"; //資料表名稱
//echo "<center>管理者您好!!<BR>\n";
// 新增一個公告
$sql = "insert into ".$user_tablename_1;
$sql .= " set `act_name`='".$act_name."'";
$sql .= ", `type`='".$type."'";
$sql .= ", `loc`='".$loc."'";
$sql .= ", `timer`='".$timer."'";
$sql .= ", `limitpeo`='".$limitpeo."'";

$sql_result = mysql_query($sql);
//echo $sql;

?>
<body><p>新增活動完成!!"<p>
<A href="http://localhost/FUNT1/group_info/group_info.php">活動瀏覽</A><BR>; 
</body>
</html>
