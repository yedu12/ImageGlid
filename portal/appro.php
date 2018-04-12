<?php
session_start();

if(isset($_GET['pwd'])){
	if($_GET['pwd']=='ooik0'){
		$_SESSION['got']='yes';
		header("location:appro.php");
	}
}
if(!isset($_SESSION['got'])){
	?>
	<form action="" method="get">
		<input type="password" name="pwd">
	</form>

	<?php
	die();
}
include("connection.php");
if(isset($_GET['id'])){
    mysql_query("update stack set status ='1' where sl='$_GET[id]'")or die(mysql_error());
}

    $q=mysql_query("select * from stack where status='0'");
    echo "<table>";
    while($r=mysql_fetch_array($q)){
    	echo "<tr><td>$r[des]</td><td><img src='ups/$r[img]' width='100px' height=100px''></td><td><a href='?id=$r[sl]' >approve</a></td></tr>";
    }
    echo "</table> ";
 ?>
