<?php 
    date_default_timezone_set("PRC");
	$path = "/home/james/php/homework2";
	$i=0;
	if(!is_dir($path)) {
		return;
	} else {
		$handle = opendir($path);
		while(false !== ($file = readdir($handle))) {
			if($file !== "." && $file !== "..") {
					$fp = fopen("/home/james/php/homework2".$file, "r");
					$fstat = fstat($fp);
					$mtime[$i] = date("Y-m-d h:m:s", $fstat["mtime"]);
					//$mtime[$i] = date("Y-m-d h:m:s", filemtime($file));
					$time = date("h:m:s");
					$i++;
					fclose($fp);
			}
		}
		var_dump($mtime);
	}
	closedir($handle);

?>
