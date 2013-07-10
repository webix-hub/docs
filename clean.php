<?php

	function rm_all($source, $rm_self = false){
		$directory = dir($source);
		while (FALSE !== ($readdirectory = $directory->read())){
			if ($readdirectory == '.' || $readdirectory == '..'){
				continue;
			}
			$PathDir = $source.'/'.$readdirectory;
			
			if ($readdirectory == "readme.md" && $rm_self === false)
				continue;

			if (is_dir($PathDir))
				rm_all($PathDir, true);
			else
				unlink($PathDir);
		}

		$directory->close();

		if ($rm_self === true)
			rmdir($source);
	}


	rm_all("./temp/");
	rm_all("./static/");

	echo "<h1>Done</h1>";
?>