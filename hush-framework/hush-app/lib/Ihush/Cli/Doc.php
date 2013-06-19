<?php
/**
 * Ihush Cli
 *
 * @category   Ihush
 * @package    Ihush_Cli
 * @author     James.Huang <huangjuanshi@163.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    $Id$
 */

/**
 * @package Ihush_Cli
 */
class Ihush_Cli_Doc extends Ihush_Cli
{
	/**
	 * Document cli class instruction
	 * @return void
	 */
	public function helpAction ()
	{
		parent::__init();
		$this->_printHeader();
		echo "hush doc build\n";
	}
	
	/**
	 * Generate lib document to www/doc
	 * @return void
	 */
	public function buildAction ()
	{
		// init phpdoc enviornment
		$phpdocBin = realpath(__COMM_LIB_DIR . '/Phpdoc/phpdoc');
		if (!$phpdocBin) die('Phpdoc executive file can not be found.');
		$phpdocBin = 'php ' . $phpdocBin;
		
		// building app document
		echo "\n>>> Building app's api document ...\n\n";
		$docThemeApi = 'HTML:frames:service.api';
		$docTitleApi = 'Ihush Apis Documentation';
		$targetDirApi = __DOC_DIR . '/api/Ihush';
		$sourceDirApi = __LIB_DIR;
		$command = "$phpdocBin -o $docThemeApi -ti '$docTitleApi' -t $targetDirApi -d $sourceDirApi";
		echo $this->exec($command);
		
		// building hush framework document
		echo "\n>>> Building hush framework's document ...\n\n";
		$docThemeLib = 'HTML:frames:service.lib';
		$docTitleLib = 'Hush Framework Documentation';
		$targetDirLib = __DOC_DIR . '/api/Hush';
		$sourceDirLib = __HUSH_LIB_DIR;
		$command = "$phpdocBin -o $docThemeLib -ti '$docTitleLib' -t $targetDirLib -d $sourceDirLib";
		echo $this->exec($command);
	}
}
