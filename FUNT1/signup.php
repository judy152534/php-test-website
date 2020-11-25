<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>註冊</title>
<style>
* {
  box-sizing: border-box;
}
html,body{
  height: 100%;
  }

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
						.footer{
   							
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
			
		<div class="center">
  		
		 <form action="doregister.php " name="dl" method="post">
		        <p><font size="5">建立您的帳戶:</font></p>
		        
		        <p>帳        號：<input type="text" name="id" placeholder="帳號" style="width:200px;height:30px;"></p><br>
		       
		        <p>密        碼：<input type="password" name="password" placeholder="密碼需要輸入8~15" style="width:200px;height:30px;"></p><br>
		        
		        
		        <p>再輸入一次：<input type="password" name="confirmPassword"  style="width:200px;height:30px;"></p><br>
	
		        <p><input type="submit" value="開始註冊" onclick="location.href='index.php'"
		        style="border:2px #02F78E solid;background-color:#02F78E; color:#ffffff;width:280px;height:30px;"></p>
		         <p><input type="reset" name="zu" value="重置" 
		         style="border:2px #02F78E solid;background-color:#02F78E; color:#ffffff;width:280px;height:30px;"></p>
        
    
		 </form>
	
		 </div>
<div class="footer">
</div>

		 
</body>
</html>








