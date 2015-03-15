<?php
namespace O3Co\Standards\JisX0402\Loader;

use Symfony\Component\Config\FileLocatorInterface;
use O3Co\Dictionary\Loader\CsvFileLoader as BaseLoader;

class CsvFileLoader extends BaseLoader 
{
	public function __construct(FileLocatorInterface $locator)
	{
		parent::__construct($locator, array('code', 'pref_code', 'pref_name', 'name', 'kana'));

		$this->setDefaultIndexField('code');
	}
}

