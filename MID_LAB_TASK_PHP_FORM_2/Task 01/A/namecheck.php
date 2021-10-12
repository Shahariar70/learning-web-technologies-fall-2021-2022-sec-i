<?php 
	
	if(isset($_REQUEST['myname'])){
		$name = $_REQUEST['myname'];
		if($name != ""){
			echo $name;
		}else{
			echo "Null value";
		}
	}

?>