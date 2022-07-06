<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
		<script>
			alert("Connection Successful");
		</script>
	<?php
}else{

	?>
		<script>
			alert("Not Connected successfully ");
		</script>
	<?php
}


?>