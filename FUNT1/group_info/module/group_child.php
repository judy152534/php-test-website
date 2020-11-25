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
include_once "utility/demodule.php";

class child extends demodule{
	function getSelect($act){
		if		($act == "0"){
			$stmt = $this->conn->prepare("SELECT * FROM tbl_ms2");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
		}
		else if	($act == "1"){
			$stmt = $this->conn->prepare("SELECT * FROM stud_info WHERE 1=0");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
		}
		else if	($act == "2"){
			$stmt = $this->conn->prepare("SELECT * FROM stud_info WHERE stud_id = '".$_GET["id"]."'");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
		}
		else if	($act == "3")
			echo "<p>Select Delete flow data. </p>" ;
		else if	($act == "4")
			$stmt = $this->conn->prepare("SELECT * FROM tbl_ms2 WHERE act_id = '".$_GET["id"]."'");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
	}

	function drawView($act){
		if		($act == "0")
			$this->drawGridView() ;
		else if	($act == "1")
			$this->drawInsertView() ;
		else if	($act == "2")
			$this->drawUpdateView() ;
		else if	($act == "4")
			$this->drawDataView() ;	;
	}

	private function drawGridView(){
		$rowsOfPage		= 15	;
		$currentPage	= isset($_GET["p"]) ? intval($_GET["p"],10) : 1 ;
		$totalPages		= ceil(count($this->result) / $rowsOfPage) ;
		$currentPage	= min(max(1,$currentPage),$totalPages) ;
		$rowStart		= ($currentPage - 1) * $rowsOfPage ;
		$rowEnd			= min($rowStart + $rowsOfPage,count($this->result)) ;
		
		for	($row = $rowStart ; $row <$rowEnd; $row++)
					echo	"<table style='margin:10px auto;width: 1000px;background-color:#666666;border-spacing: 1px'>".
					"<tr style='background-color: #BDBDBD'>".
							"	<th>主揪</th>".
				  			"	<td>".$this->result[$row]["username"]."</td>".
				  			"	<td rowspan=5><form action='utility/server.php' method='post'><input type='submit' value='看細節' name='submit'></form></td>".
					"</tr>".
					"<tr style='background-color: #BDBDBD'>".
					"	<th>地點</th>".
					"	<td>".$this->result[$row]["loc"	]."</td>".
					"</tr>".
					"<tr style='background-color: #BDBDBD'>".
					"	<th>時間</th>".
					"	<td>".$this->result[$row]["timer"	]."</td>".
				    "</tr>".
					"<tr style='background-color: #BDBDBD'>".
					"	<th>限制人數</th>".
					"	<td>".$this->result[$row]["limitpeo"]."</td>".
						"</tr>".
					"</table>";
		//---
		echo	"</table>"	;		
	}	
}
echo "<BR><BR><center><FONT SIZE='5' COLOR='#66CCFF'>活動列表!!</FONT><BR><BR>\n";
?>
<body></body>
</html>