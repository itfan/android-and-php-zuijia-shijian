<?php
/**
 * Ihush App
 *
 * @category   Ihush
 * @package    Ihush_App_Frontend
 * @author     James.Huang <shagoo@gmail.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    $Id$
 */
 
require_once 'Ihush/App/Frontend/Page.php';
require_once 'Ihush/Mongo.php';

/**
 * @package Ihush_App_Frontend
 */
class TestDbPage extends Ihush_App_Frontend_Page
{
	public function __init ()
	{
		// init dao
		parent::__init();
		
		$this->mongo = new Ihush_Mongo();
	}
	
	public function indexAction () 
	{
		echo 'This is index action'; 
	}
	
	public function mysqlShardAction () 
	{
		$dao = $this->dao->load('Apps_Product');
		
		// test create
		echo "<b>READ SHARDING 1 :</b>";
		Hush_Util::dump($dao->shard(1)->read(1));
		
		// test create
		echo "<b>READ SHARDING 2 :</b>";
		Hush_Util::dump($dao->shard(2)->read(2));
	}
	
	public function mongoShardAction () 
	{
		$mongo = $this->mongo->load('Foo_Foo');
		
		// test create
		echo "<b>TEST CREATE :</b>";
		$result = $mongo->create(array('foo' => 1, 'val' => 1, '_time' => time()));
		Hush_Util::dump($result);
		usleep(10000);
		$result = $mongo->read(array('foo' => 1));
		Hush_Util::dump(iterator_to_array($result));
		usleep(10000);
		
		// test update
		echo "<b>TEST UPDATE :</b>";
		$result = $mongo->update(array('foo' => 1), array('foo' => 1, 'val' => 2, '_time' => time()));
		Hush_Util::dump($result);
		usleep(10000);
		$result = $mongo->read(array('foo' => 1));
		Hush_Util::dump(iterator_to_array($result));
		usleep(10000);
		
		// test delete
		echo "<b>TEST DELETE :</b>";
		$result = $mongo->delete(array('foo' => 1));
		Hush_Util::dump($result);
		usleep(10000);
		$result = $mongo->read(array('foo' => 1));
		Hush_Util::dump(iterator_to_array($result));
		ob_flush();
		flush();
	}
}
