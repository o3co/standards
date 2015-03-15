<?php
namespace O3Co\Standards\Iso3166\Loader;

use Symfony\Component\Config\FileLocatorInterface;
use O3Co\Dictionary\Loader\CsvFileLoader as BaseLoader;

/**
 * CsvFileLoader 
 * 
 * @uses BaseLoader
 * @package { PACKAGE }
 * @copyright Copyrights (c) 1o1.co.jp, All Rights Reserved.
 * @author Yoshi<yoshi@1o1.co.jp> 
 * @license { LICENSE }
 */
class CsvFileLoader extends BaseLoader 
{
	/**
	 * __construct 
	 * 
	 * @param FileLocatorInterface $locator 
	 * @access public
	 * @return void
	 */
	public function __construct(FileLocatorInterface $locator)
	{
		parent::__construct($locator, array('name', 'alpha2', 'alpha3', 'numeric'));

		$this->setDefaultIndexField('alpha3');
	}
}

