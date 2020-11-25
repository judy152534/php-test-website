<?php

session_start();



//如果沒有登入Session值 或是 Session值為空

if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){

//前往登入頁面

header("location:http://localhost/FUNT1/signin.php");

}

else{

//若使用者已經是登入狀態擁有SESSION值，則前往以下網頁

header("location: http://localhost/FUNT1/group_info/utility/server.php"); 
}




?>