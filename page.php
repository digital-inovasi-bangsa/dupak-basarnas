<?php
$page=$_GET['page'];
$path=$page.".php";
if(file_exists($path)){
include $path;
}else{
echo "
	<div class='alert'>
	<button type='button' class='close' data-dismiss='alert'>&times;</button>
	<h5><strong>Warning !</strong> Page not found .</h5>
	</div>";
}
?>