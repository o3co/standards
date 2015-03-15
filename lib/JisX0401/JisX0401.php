<?php
namespace O3Co\Standards\JisX0401;

use Symfony\Component\Config\FileLocator;
use O3Co\Standards\JisX0401\Loader\CsvFileLoader;

/**
 * JisX0401 
 * 
 * @final
 * @package { PACKAGE }
 * @copyright Copyrights (c) 1o1.co.jp, All Rights Reserved.
 * @author Yoshi<yoshi@1o1.co.jp> 
 * @license { LICENSE }
 */
final class JisX0401 
{
	/**
	 * dictionary 
	 * 
	 * @static
	 * @var mixed
	 * @access public
	 */
	static $dictionary;

	/**
	 * getDictionary 
	 * 
	 * @static
	 * @access public
	 * @return void
	 */
	static public function getDictionary()
	{
		if(!static::$dictionary) {
			// Load Array data
			$loader = new CsvFileLoader(new FileLocator(__DIR__ . '/Resources/data'));
			static::$dictionary = $loader->load('jis_x_0401.csv'); 
		}

		return static::$dictionary;
	}
}

