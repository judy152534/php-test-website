﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>請登入</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<style>
					
				     .center{
							text-align: center;
							 
				
							}
							 body{
							background-color:  #F0F3F4;
							background-repeat: no-repeat;
							background-attachment: fixed;  
  							background-size: cover;
						
							}
							.header {
 							 background-color:  #ABEBC6 ;
 							 border: 1px solid  #ABEBC6;
 							 padding: 10px;
							  height: 100px;
							 width:100%;
 							 /*position: fixed;
 							 top: -5px;*/
 								}

		</style>
		

	</head>
		<body>
			<div class="header">
  				<h1>FunTOGet</h1>
			</div>

		
		<div class="center">
  		
  		<p><img src="images\logo.png" width="280" ></p>
  		
		 <form method ="POST" action = "doloadling.php" name="frmLogin"> 
		 		
		 		
		        
		        <p>帳        號：<input type="text" name="uid" placeholder="帳號" style="width:200px;height:20px;"></p><br>
		       
		        <p>密        碼：<input type="password" name="password" placeholder="密碼" style="width:200px;height:20px;"></p><br>
		        
		        <p><input type="submit" value="登入" onClick="window.location.href='add.php'"
		        style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:140px;height:30px; "></p>
		        <p><input type="reset" name="rs" value="重置" 
		         style="border:2px #02F78E solid;background-color:#02F78E; color:#ffffff;width:140px;height:30px; "></p>
		         <p><input type="button" name="zu" value="註冊" onClick="window.location.href='signup.php'" 
		        style="border:2px #02F78E solid;background-color:#02F78E; color:#ffffff;width:140px;height:30px; "></p>

 			
		       
		      
		 </form>
		 
		 </div>
		 
		</body>
</html>
		

