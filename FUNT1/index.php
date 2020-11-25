<!DOCTYPE html>
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
<body>

<div class="header">
  <h1>FunTOGet</h1>
</div>

<div class="navbar">
  <a href="#">首頁</a>
  <a href="signin.php">登入/註冊</a>
  <a href="insert.php">我要開團</a>
</div>


<div class="row">
<div class="menu">
  <div class="menu1">我要找樂子!</div>
  <div class="meni">
  
	
		<form action="search2.php" method="post" target="_blank">
		  <label for="act_name"></label>
		  <input type="text" id="act_name" name="act_name" placeholder="輸入活動關鍵字"><br><br>
		  <label for="timer"></label>
		  <input type="date" id="timer" name="timer"><br><br>
		  <input type="submit" value="Submit">
		</form>
		
  </div>
 
</div>

<div class="main">
  <h1>給你不同的揪團體驗</h1>
  <p>還在煩惱找不到志同道合的咖嗎?</p>
  <!-- First Photo Grid-->
  <div class="main-type" id="type">
    <div class="box-shadow">
    <div class="meal">
      <a href="http://localhost/FUNT1/group_info/group_info.php">
      <img src="images/eat2.jpg" alt="Have meal"class="hover-opacity">
      </a>
      <div class="container-white">
      <h3>大家一起吃更有味道!</h3>
      <p>Add more flavor if you want.</p>
      </div>
      </div>
    </div>
    
    <div class="box-shadow">
    <div class="sports">
    <a href="http://localhost/FUNT1/group_info/group_info.php">
      <img src="images/play2.jpg" alt="Have meal"class="hover-opacity">
     </a>
      <div class="container-white">
      <h3>適合還在找球友的你</h3>
      <p>Let's teamup and have fun.</p>
      </div>
      </div>
    </div>
    
   
<div class="footer">
</div>
</body>
</html>








