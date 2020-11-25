<!DOCTYPE html>
<html lang="en">
<head>
<title>我的留言板-新增留言</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color:  #ABEBC6 ;
  border: 1px solid  #ABEBC6;
  padding: 10px;
  height: 120px;
  width:100%;
 
  /*position: fixed;
  top: -5px;*/
 }

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #DEFFDE;
  padding: 20px;
   min-height: 100vh;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #ffffff;
  padding: 10px;
}



/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>


<div class="header">
  <h1>FunTOGet</h1>
</div>

<section>
  <nav>
    <ul>
     <p><input type = "button" value = "新增留言" onclick="location.href='add.php'" class="button"
     style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:140px;height:30px; "/></p>
    <p><input type = "button" value = "檢視留言" onclick="location.href='show.php'" class="button"
    style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:140px;height:30px; "/></p>
	<p><input type = "button" value = "退出登陸" onclick="location.href='index.php'" class="button"
	style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:140px;height:30px; "/></p>
    </ul>
  </nav>
  
  <article>
  <center>
     <?php  
        //資料庫連線  
        $con = @mysqli_connect("","","","");  
        if(!$con){  
            die("資料庫連線錯誤".mysqli_connect_error());  
        }  
        mysqli_query($con,"set names 'utf8'");  
        //顯示每頁的留言數  
        $pagesize = 8;  
        //確定頁數p引數  
        @$p = $_GET['p']?$_GET['p']:1;  
        //資料指標  
        $offset = ($p-1)*$pagesize;  
        //查詢本頁現實的資料 
		session_start();
        $id=$_SESSION["uid"];
        
        $query_sql = "select * from tbl_ms1 where user= '$id' order by user desc limit $offset,$pagesize";  
        # echo $query_sql;  
        $result = mysqli_query($con,$query_sql);  
		/*if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}*/
        //迴圈輸出  
		echo "<div style='margin-top:55px'>";
		while($res = mysqli_fetch_array($result)){
			//var_dump($res);
			echo "<div class='k'>";
			echo "<div class='ds-post-main'>";
			echo "<div class='ds-comment-body'>
			<span>{$res['author']}  於  {$res['time']}  給我留言</span>
			<span style='float:right'><a href = 'del.php?id=".$res['user']."'><input type='submit' class='button1' value='刪除' style='border:2px #FFDEDE solid;background-color:#FFDEDE; color: #ffffff;width:50px;height:30px; '></input></a></span>
			<p>留言主題 : {$res['title']}   留言地址 : <span>{$res['ip']}</span></p>
            <hr width=450px> 
			<p>{$res['liuyan']}</p></div><br>";
			echo "</div>";
			echo "</div>";
        }
		echo "</div>";
        //分頁程式碼  
        //計算留言總數  
        $count_result = mysqli_query($con,"select count(*) as count from tbl_ms1 where user= '$id'");  
        $count_array = mysqli_fetch_array($count_result);  
      
        //計算總的頁數  
        $pagenum = ceil($count_array['count']/$pagesize);  
        //echo '共',$count_array['count'],'條留言';  
		//echo '共',$pagenum,'頁';
        echo "<center>";
        echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$count_array['count'],'條留言','</div>';  
		echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$pagenum,'頁','</div>';  
      
        //迴圈輸出個頁數及連結  
        if($pagenum>1){  
            for($i = 1;$i<=$pagenum;$i++){  
                if($i == $p){  
                    echo "<div style='background:#e8ffc4;width:25px;display: inline-block;margin-right: 10px;'>",$i,"</div>";
                      
                }else{  
                    //echo  '<a href="show.php?p=',$i,'">',$i,'</a>';
					echo '<a href="show.php?p=',$i,'">',"<div style='width:25px;display: inline-block;margin-right: 10px;background:#FF9D6F'>",$i,'</div>','</a>';
                }
            }
	echo "<div style='display: inline-block;margin-right: 10px;'>",'當前在 ',$p, ' 頁',"</center></div>";
        }
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "</div>";
    ?>
	<script type="text/javascript"> 
      function logout(){ 
        <% 
          session.invalidate(); //運用invalidate()比較好，退出時使session失效
        %> 
      }
    </script>
    </center>
  </article>
</section>



</body>
</html>
