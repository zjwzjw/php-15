<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="update blog set hits=hits+1 where blogid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			$sql="select * from blog where blogid='$id'";
			$query=mysqli_query($link,$sql);
			$rs=mysqli_fetch_array($query);			
		}
			}
?>

<h2><?php echo $rs['title']?></h2>
<li><?php echo $rs['time']?></li><br />
<span>访问量:<?php echo $rs['hits']?></span>
<p><?php echo $rs['content']?></p>
<hr /> 
