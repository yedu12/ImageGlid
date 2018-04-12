<!DOCTYPE html>
<html>
<head>
	<title> Vigama</title>
	<link rel="stylesheet" type="text/css" href="font/font_ins.css" >
	<link rel="stylesheet" type="text/css" href="font/bootstrap.css" >
	<script type="text/javascript" src="imgs/jquery.min.js" ></script>
<script type="text/javascript" src="imgs/jquery-ui.js" ></script>
</head>
<body>
<div id="left">
<?php
	include("connection.php");
    $q=mysql_query("select * from stack where status='1' order by sl desc");
    while($r=mysql_fetch_array($q)){

 ?>

<div id="page" >
	<div id="title" ><?php echo $r['des']; ?></div><br/><br/>
	<img src="ups/<?php echo $r['img']; ?>" ><br/>
	
</div>

<?php
	}
 ?>
 </div>
 <div id="right">
 <div id="name" style="font-size:18px;background: indigo;">Send a message to 9704179619 with your name .</div>
 <?php
	
    $q=mysql_query("select * from next order by sl desc");
    while($r=mysql_fetch_array($q)){

  ?>
	<div id="text_display" >
		<div id="name" ><?php echo $r['name']; ?></div>
		<div id="msg" ><?php echo $r['text']; ?></div>
		
	</div>
	<?php } ?>
</div>
</body>
<style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
	}
	#right{
		position: absolute;
		right: 100px;
		top: 6%;
		width: 30%;
		background: rgba(255,255,255,0.8);
		height: 600px;
	}
	#text_display{
		margin: 7%;
		
	}
	#name{
		background: teal;
		padding: 5px;
	}
	#msg{
		padding: 10px;
		background: rgb(65,65,65);
	}
	body{
		overflow: hidden;
		background:rgb(4,61,104) url('imgs/Rectangular-Delusions-No-Background.png');
		background-size: 100% 800px;
		color: white;
	}
	#page img{

		box-shadow: -10px 0px 1px 3px black;
		width: 75%;
		max-height: 500px;
		margin-left: 100px;
		transform: rotateY(20deg);
	}	
	#page{
		//perspective: 600px;
	}
	#left{
		margin-top: 3%;
		width:55%;
		background:rgba(255,255,255,0.8);
		margin-left: 5%;
		padding: 20px;
		height: 600px;
	}
	#title{
		display: inline-block;
		font-size: 20px;
		padding: 10px;
		color: white;
		background: rgba(30,30,30,0.8);
		animation:zoo 2s linear;
		animation-iteration-count: infinite;
		font-family: Aclonica;

	}
	@keyframes zoo{
		0% {
			padding-left: 10px;
		}
		50%{
			padding-left: 40px;
		}
		100%{
			padding-left: 10px;
		}
	}
	h1{
		font-family: eglantine;
		font-size: 300px;
		padding: 0px;
		color: white;
		text-shadow: 1px 1px 1px black;
		margin: 0px;
		font-weight: normal;
		letter-spacing: 10px;
		position: fixed;
		top: 100px;
		left: 4%;
		transform:rotateZ(-27deg);
		opacity: 0.4;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		all=document.querySelectorAll("#page");
		for(var i=0;i<all.length;i++){
			$(all[i]).hide();
		}
		arr=new Array("bounce","fade","shake","slide","fold","explode");
		//alert(all.length);
		$(all[0]).show("shake");
		 j=1;
		 len=all.length;
		setInterval(function (){
			$.get("get_length.php",function(data,status){
				if( data>len){
					window.location.href="main.php";
				}
			});
		},5000);
		setInterval(function(){
			var k=Math.floor(Math.random()*arr.length);
			for(var i=0;i<all.length;i++){
				$(all[i]).hide(arr[k],"100");
			}
			setTimeout(function(){
				$(all[j]).show(arr[k],"100");
			},500);
			
			j++;
			if(j==all.length){
				j=0;
			}
		},10000);
	});
	
</script>
</html>
