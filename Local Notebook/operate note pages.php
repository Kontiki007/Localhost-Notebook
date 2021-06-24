<?php 
$dir = "xxxxxxxxx/Local Notebook/Note pages/"; //Modify the value of this variable to your own path
$scanned = array_diff(scandir($dir), array('.','..'));
foreach($scanned as $key=>$value){
	$extension = pathinfo($value, PATHINFO_EXTENSION);
	$name = pathinfo($value, PATHINFO_FILENAME);
	if($extension=='php' OR $extension=='txt'){
		echo("<a href='Note pages/".$value."'>".$name."</a>");
		echo("<br>");
	}
}
?>