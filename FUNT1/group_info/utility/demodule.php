<?php
class DeModule{
	protected $conn		= null	;
	protected $result	= null	;
	function __construct(){
		$servername	=	""	;
		$username	=	""		;
		$password	=	""		;
		$dbname		=	""		;
		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		//---
		$act = isset($_GET["act"]) ? $_GET["act"] : "0" ;
		//---
		$this->launch($act)	;
	}
	
	function launch($act){
		if		($act == "0"){	/* Grid flow */
			$this->getSelect($act) ;
			$this->drawView($act) ;
		}
		else if	($act == "1"){ /* Insert flow */
			$this->getSelect($act) 	;
			if ($_SERVER["REQUEST_METHOD"] == "POST"){ /* 檢查是否按下存檔 */
				if (!$this->dataCheck($act)) /* 呼叫資料檢查 */
					$this->drawView($act)	; /* 檢查失敗，畫面重繪 */
				else
					$this->applyData($act)	; /* 檢查成功，資料入檔 */
			}
			else
				$this->drawView($act)	;
		}
		else if	($act == "2"){ /* Update flow */
			$this->getSelect($act) 	;
			if ($_SERVER["REQUEST_METHOD"] == "POST"){ /* 檢查是否按下存檔 */
				if (!$this->dataCheck($act)) /* 呼叫資料檢查 */
					$this->drawView($act)	; /* 檢查失敗，畫面重繪 */
				else
					$this->applyData($act)	; /* 檢查成功，資料入檔 */
			}
			else
				$this->drawView($act)	;
		}
		else if	($act == "3"){ /* Delete flow */
			$this->getSelect($act) 	;
			$this->applyData($act)	; /* 資料異動 */
		}
		else if	($act == "4"){ /* Data view flow */
			$this->getSelect($act) 	;
			$this->drawView($act)	;
		}
		else
			$this->extraAction($act)	;
	}
		
	protected function getSelect($act){		/* 讀取資料庫資料 */
		echo "<p>Get Select Function ......</p>" ;
	}
	
	protected function drawView($act){		/* 繪製用戶使用UI */
		echo "<p>Draw View Function : $act ......</p>" ;
	}
	
	protected function dataCheck($act){		/* 資料異動前檢查 */
		echo "<p>Data Check Function ......</p>" ;
		return true ;
	}
	
	protected function applyData($act){		/* 資料異動 */
		echo "<p>Apply Data Function ......</p>" ;
	}
	
	protected function extraAction($act){	/* 其他功能預留 */
		echo "<p>Extra Action Function......</p>"	;
	}

	function __destruct(){
		$this->conn = null ;
	}
}
?>