<html>
<head>
<title>登陸</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/logbtn.css">
<style>
body{height:100%;}
</style>
</head>
<body background="../lowdown/images/pic02.jpg" style="background: url(./images/timg7.jpg);">
<div class="index_01"> 
<table style="width: 100%;height:100%;" >
  <tr>
    <td align="center" valign="middle" bgcolor="#33CC99" >
      <table align="center" width=350 height=230; class="index_table" >  
       <form method ="POST" action = "doloadling.php" name="frmLogin"> 

          <p style="font-size:35px;">他喵的 我不想做專題</p>
     <tr align="center" style="font-size:25px;"> 	
           <td colspan="2" style="font-size:35px;"><strong>使用者登陸</strong></td>
     </tr>
       <tr>  
           <td align="center" style="font-size:25px;">使用者名稱</td>  
           <td><input type="name" maxlength="16" name="uid" placeholder="請輸入賬號" style="width:180px;font-size:20px;border-radius: 8px; "></td>  
       </tr>  
       <tr>  
           <td align="center" style="font-size:25px;">密   碼</td>  
           <td><input name="password" type="password" maxlength="16" placeholder="請輸入密碼" style="width:180px;font-size:20px;border-radius: 8px; "></td>
       </tr>
       <tr align="center"> 
           <td colspan="2">
           <input type="submit" name="denglu" value="登陸" class="btn">
           <input type="reset" name="rs" value="重置" class="btn">  
           <input type="button" name="zu" value="註冊" onClick="window.location.href='register.php'" class="btn"/>  
           </td>  
       </tr> 
     </form>
     </table>
    </td>
  </tr>
</table> 
</div>
</body>
</html> 