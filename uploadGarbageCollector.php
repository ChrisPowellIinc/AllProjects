<?php
$dir = "temp_uploads/";
foreach (glob($dir."*") as $file){
	if (filemtime($file) < time() - 86400){
		unlink($file);
    }
}
?>