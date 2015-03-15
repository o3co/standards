<?php
namespace O3Co\Standards\Iso3166\Tests;

use O3Co\Standards\Iso3166\Iso3166;

class Iso3166Test extends \PHPUnit_Framework_TestCase 
{
	public function testSuccess()
	{
		$dic = Iso3166::getDictionary();

		$term = $dic->find('jpn');
		$this->assertEquals('日本', $term->get('name'));
	}
}

