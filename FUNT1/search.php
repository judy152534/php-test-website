<?php
mysql_connect("","","");//連結伺服器
mysql_select_db("");//選擇資料庫
mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
if($_POST['act_name']!='' or $_POST['timer']!=''){
 $act_name=$_POST['act_name'];
 $timer=$_POST['timer'];
 $data=mysql_query("select * from tbl_ms2 where act_name like '%$act_name%' or timer like '$timer'"); 
}else{
 $data=mysql_query("select * from tbl_ms2");
}

?>

<table width="700" border="1">
   <tr>
    <td >編號</td>
    <td >團名</td>
    <td >種類</td>
    <td >主揪</td>
    <td >地點</td>
    <td >時間</td>
    <td >限制人數</td>
  </tr>
 <?php
for($i=1;$i<=mysql_num_rows($data);$i++){
$rs=mysql_fetch_row($data);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>

  </tr>
  
  <?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>
