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
$err_message = isset($_GET["err_message"]) ? $_GET["err_message"] : " " ;

if ($err_message <> ''){
  echo "<FONT SIZE='7' COLOR='#FF0000'>".$err_message."</FONT>";
}
$next_name = "insert_check.php";
echo "<center>";
echo "活動新增畫面<BR>";
echo "<FORM METHOD='post' ACTION='".$next_name."' ENCTYPE='multipart/form-data'>";
echo "使用者帳號<INPUT TYPE='text' NAME='user' size='10'><BR>";
echo "使用者密碼<INPUT TYPE='password' NAME='pasd' size='10'><BR><BR>";
echo "揪團名稱<INPUT TYPE='text' NAME='act_name' size='20'><BR>";
echo "揪團種類<INPUT TYPE='text' NAME='type' size='20'><BR>";
echo "地點<INPUT TYPE='text' NAME='loc' size='20'><BR>";
echo "時間<INPUT TYPE='text' NAME='timer' size='20'><BR>";
echo "人數限制<INPUT TYPE='text' NAME='limitpeo' size='20'><BR>";
echo "<INPUT TYPE='submit' value='確定送出'>";
echo "</form>";
?>
<body></body>
</html>