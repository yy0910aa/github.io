<?php
$opt=$_POST["op"];
$kekka=0;
for($i=0;$i<count($opt);$i++){
 $kekka=$kekka+$opt[$i];
}if(empty($_POST['op'])){
    $error_message[] ='チェックを入れてください';
    }
$total=$kekka;



?>
<html>
<head><meta charset="utf-8">
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
main{
background-color:#fa8072;
height:600px;
margin:5px;
padding-top:50px;
color:#fff;
font-size:40px;
text-align:center;
}
#a5{
font-size:20px;
color:#000;
margin:50px auto 0 auto; 
width:450px;
border-radius:10px;
background-color:#fff;
padding:40px;
height:300px;
}
#a5 td{
padding:20px;
border-bottom:1px dotted #b22222;
}
footer{
padding:30px;
text-align:center;
}
.ab{
text-align:right;
}

</style>
</head>
<body>
<header>
<h1> <a href="index.html">delivery</a></h1>
</header>
<main>
ご注文ありがとうございます
<table id="a5">
<tr><td>注文数</td><td class="ab"><?php print($i); ?>点</td?</tr>
<tr><td>合　計</td><td class="ab"><?php print($total); ?>円</td></tr>
</table>
</main>
<footer>©︎delivery</footer>
</body>
</html>
