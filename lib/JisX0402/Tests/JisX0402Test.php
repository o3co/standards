<?php
namespace O3Co\Standards\JisX0402\Tests;

use O3Co\Standards\JisX0402\JisX0402;

class JisX0402Test extends \PHPUnit_Framework_TestCase 
{
	public function testSuccess()
	{
		$dic = JisX0402::getDictionary();

		$term = $dic->find('01101');
		$this->assertEquals('札幌市中央区', $term->get('name'));
		$this->assertEquals('01', $term->get('pref_code'));
	}
}

