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
			$stmt = $this->conn->prepare("SELECT * FROM tbl_ms2 WHERE 1=0");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
		}
		else if	($act == "2"){
			$stmt = $this->conn->prepare("SELECT * FROM tbl_ms2 WHERE act_id = '".$_POST["id"]."'");
			$stmt->execute()	;
			//---
			$this->result	= $stmt->fetchAll()	;
		}
		else if	($act == "3")
			echo "<p>Select Delete flow data. </p>" ;
		else if	($act == "4")
			$stmt = $this->conn->prepare("SELECT * FROM tbl_ms2 WHERE act_id = '".$_POST["id"]."'");
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
?>