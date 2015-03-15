<?php
namespace O3Co\Standards\Iso3166;

use Symfony\Component\Config\FileLocator;
use O3Co\Standards\Iso3166\Loader\CsvFileLoader;

/**
 * Iso3166 
 * 
 * @final
 * @package { PACKAGE }
 * @copyright Copyrights (c) 1o1.co.jp, All Rights Reserved.
 * @author Yoshi<yoshi@1o1.co.jp> 
 * @license { LICENSE }
 */
final class Iso3166 
{
	/**
	 * dictionary 
	 * 
	 * @static
	 * @var mixed
	 * @access private 
	 */
	static private $dictionary;

	/**
	 * getDictionary 
	 * 
	 * @static
	 * @access public
	 * @return void
	 */
	static public function getDictionary($locale = null)
	{
		if(!$locale) {
			// Get system Locale
			$locale = \Locale::getPrimaryLanguage(\Locale::getDefault());
		}

		if(!static::$dictionary) {
			// Load Array data
			$loader = new CsvFileLoader(new FileLocator(__DIR__ . '/Resources/data'));
			static::$dictionary = $loader->load('iso_3166.' . $locale . '.csv'); 
		}

		return static::$dictionary;
	}

	/**
	 * resetDictionary 
	 * 
	 * @param mixed $locale 
	 * @static
	 * @access public
	 * @return void
	 */
	static public function resetDictionary($locale = null)
	{
		$loader = new CsvFileLoader(new FileLocator(__DIR__ . '/Resources/data'));
		static::$dictionary = $loader->load('iso_3166.' . $locale . '.csv'); 

		return static::$dictionary;
	}
}

