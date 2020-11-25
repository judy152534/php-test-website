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
    <form action = "doAdd.php" method = "post">  
    <h1>Add A Message</h1>
    <span>What's New To Share With You。</span>
    
    <label>
    <p><span>Your Name :</span>
    <input type="text" name="author" placeholder="Your Full Name" /> </p>
    </label>

    <label>
    <p><span>Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     <input type="text" name="title" placeholder="Please input title" /> </p>
    </label>

    <label>
    <p><span>Message :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     <textarea name="content" placeholder="Your Message to Us"></textarea> </p>
    </label>
    <div style="margin-left:125px">
    <input type="submit" value="提交" class="submit"
    style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:100px;height:30px; ">
    <input type = "reset" value = "重置" class="reset"
    style="border:2px #02F78E solid;background-color: #02F78E; color: #ffffff;width:100px;height:30px; ">
    </div>
	</div>
    </form>
	
    </center>
  </article>
</section>



</body>
</html>
