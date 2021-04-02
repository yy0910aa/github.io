<?php
$db = mysqli_connect("localhost","root","","webshop");
mysqli_set_charset($db,"utf8"); //文字コード設定
$sql = "select * from delivery"; 
$r = mysqli_query($db,$sql); //SQL実行し結果を取得
?>

<html>
<head>

<meta charset="utf-8">
<title>デリバリーサービス</title>
<style>
h1{
margin:0;
height:60px;
color:#b22222;
padding-top:5px;
text-align:center;
box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, .5);
text-decoration:none;
}
h1 a{
text-decoration:none;
color:#b22222;
}
	img{
width:250px;
}

figure{
background-color:#fff;
 margin:0 0 20px 20px;
 padding:5px;
text-align:center;
width:250px;
float:left;
}
main{
background-color:#fa8072;
margin:5px;
padding:100px 10px 50px 10px;
float:right;
}

input[type="submit"]{
width:50%;
height:70px;
font-size:30px;
margin:30px;
background-color:#fff;
color:#b22222;
}
input[type="submit"]:hover{
color:#fff;
background-color:#b22222;
font-size:30px;
}

#sub{
background-color:#fa8072;
text-align:center;
}

footer{
clear:both;
padding:30px;
text-align:center;
}

	
</style>
</head>
<body>
<header>
<h1> <a href="index.html">delivery</a></h1>
</header>
<form action="keisan.php" method="post" name="check_form">
<main>
<div id="a1">
<?php  while(  $row = mysqli_fetch_assoc($r)  ){  ?>
<figure><img src='gazou/<?php print($row["image"]); ?>'>
<figcaption><input type="checkbox" id="" name="op[]" value="<?php print($row["price"]); ?>"><?php print($row["name"]); ?>　<?php print($row["price"]); ?>円</figcaption>
</figure>
<?php  } 
mysqli_close($db); //DB切断
?>
</div>
</main>
<div id="sub">
<input type="submit" value="注文する">
</div>
</form>
<footer>©︎delivery</footer>
</body>
</html>
