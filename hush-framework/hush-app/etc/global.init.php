<?php
/**
 * Global init logics
 */
if (defined('__HUSH_CLI')) {
	
	// check path
	if (!is_dir(__COMM_LIB_DIR)) {
		mkdir(__COMM_LIB_DIR, 0777, true);
	}
	if (!is_dir(__HUSH_LIB_DIR)) {
		mkdir(__HUSH_LIB_DIR, 0777, true);
	}
	
	// check core libraries
	$hushDir = __HUSH_LIB_DIR . DIRECTORY_SEPARATOR . 'Hush';
	if (!is_dir($hushDir)) {
		// download Zend Framework
		echo "\nInstalling Hush Framework .. \n";
		$downFile = 'http://hush-framework.googlecode.com/files/HushFramework-lib-1.0.zip';
		$saveFile = __HUSH_LIB_DIR . DIRECTORY_SEPARATOR . 'HushFramework-lib-1.0.zip';
		$savePath = __HUSH_LIB_DIR . DIRECTORY_SEPARATOR . '.';
		if (_hush_download($downFile, $saveFile)) {
			echo "Extracting.. ";
			$zip = new ZipArchive;
			$zip->open($saveFile);
			$zip->extractTo($savePath);
			$zip->close();
			unset($zip);
			echo "Done!\n";
		}
	}
}
else {
	
	// check other libraries
	$zendDir = __COMM_LIB_DIR . DIRECTORY_SEPARATOR . 'Zend';
	if (!is_dir($zendDir)) {
		echo "\nCore libraries can not be found .. \n";
		echo "Please enter 'hush_app/bin' and use 'hush sys init' command to complete the installation.\n";
		exit(1);
	}
}