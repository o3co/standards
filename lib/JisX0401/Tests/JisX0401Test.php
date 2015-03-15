<?php
namespace O3Co\Standards\JisX0401\Tests;

use O3Co\Standards\JisX0401\JisX0401;

class JisX0401Test extends \PHPUnit_Framework_TestCase 
{
	public function testSuccess()
	{
		$dic = JisX0401::getDictionary();

		$term = $dic->find('01');
		$this->assertEquals('北海道', $term->get('name'));
	}
}

