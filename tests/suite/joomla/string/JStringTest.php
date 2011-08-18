<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Utilities
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/string/string.php';
require_once 'TestHelpers/JString-helper-dataset.php';

/**
 * Test class for JString.
 * Generated by PHPUnit on 2009-10-26 at 22:29:34.
 */
class JStringTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JString
	 * @since  11.2
	 */
	protected $object;

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strposData()
	{
		return JStringTest_DataSet::$strposTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strrposData()
	{
		return JStringTest_DataSet::$strrposTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function substrData()
	{
		return JStringTest_DataSet::$substrTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strtolowerData()
	{
		return JStringTest_DataSet::$strtolowerTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strtoupperData()
	{
		return JStringTest_DataSet::$strtoupperTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strlenData()
	{
		return JStringTest_DataSet::$strlenTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function str_ireplaceData()
	{
		return JStringTest_DataSet::$str_ireplaceTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function str_splitData()
	{
		return JStringTest_DataSet::$str_splitTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strcasecmpData()
	{
		return JStringTest_DataSet::$strcasecmpTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strcmpData()
	{
		return JStringTest_DataSet::$strcmpTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strcspnData()
	{
		return JStringTest_DataSet::$strcspnTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function stristrData()
	{
		return JStringTest_DataSet::$stristrTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strrevData()
	{
		return JStringTest_DataSet::$strrevTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function strspnData()
	{
		return JStringTest_DataSet::$strspnTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function substr_replaceData()
	{
		return JStringTest_DataSet::$substr_replaceTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function ltrimData()
	{
		return JStringTest_DataSet::$ltrimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function rtrimData()
	{
		return JStringTest_DataSet::$rtrimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function trimData()
	{
		return JStringTest_DataSet::$trimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function ucfirstData()
	{
		return JStringTest_DataSet::$ucfirstTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function ucwordsData()
	{
		return JStringTest_DataSet::$ucwordsTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function transcodeData()
	{
		return JStringTest_DataSet::$transcodeTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	static public function validData()
	{
		return JStringTest_DataSet::$validTests;
	}

	/**
	 * @return  void
	 *
	 * @dataProvider strposData
	 * @since   11.2
	 */
	public function testStrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strrposData
	 * @since   11.2
	 */
	public function testStrrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strrpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider substrData
	 * @since   11.2
	 */
	public function testSubstr($string, $start, $length = false, $expect)
	{
		$actual = JString::substr($string, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strtolowerData
	 * @since   11.2
	 */
	public function testStrtolower($string, $expect)
	{
		$actual = JString::strtolower($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strtoupperData
	 * @since   11.2
	 */
	public function testStrtoupper($string, $expect)
	{
		$actual = JString::strtoupper($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strlenData
	 * @since   11.2
	 */
	public function testStrlen($string, $expect)
	{
		$actual = JString::strlen($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider str_ireplaceData
	 * @since   11.2
	 */
	public function testStr_ireplace($search, $replace, $subject, $count, $expect)
	{
		$actual = JString::str_ireplace($search, $replace, $subject, $count);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider str_splitData
	 * @since   11.2
	 */
	public function testStr_split($string, $split_length, $expect)
	{
		$actual = JString::str_split($string, $split_length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strcasecmpData
	 * @since   11.2
	 */
	public function testStrcasecmp($string1, $string2, $locale, $expect)
	{
		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		else
		{
			$actual = JString::strcasecmp($string1, $string2, $locale);
			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}
			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strcmpData
	 * @since   11.2
	 */
	public function testStrcmp($string1, $string2, $locale, $expect)
	{
		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		else
		{
			$actual = JString::strcmp($string1, $string2, $locale);
			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}
			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strcspnData
	 * @since   11.2
	 */
	public function testStrcspn($haystack, $needles, $start, $len, $expect)
	{
		$actual = JString::strcspn($haystack, $needles, $start, $len);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider stristrData
	 * @since   11.2
	 */
	public function testStristr($haystack, $needle, $expect)
	{
		$actual = JString::stristr($haystack, $needle);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strrevData
	 * @since   11.2
	 */
	public function testStrrev($string, $expect)
	{
		$actual = JString::strrev($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider strspnData
	 * @since   11.2
	 */
	public function testStrspn($subject, $mask, $start, $length, $expect)
	{
		$actual = JString::strspn($subject, $mask, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider substr_replaceData
	 * @since   11.2
	 */
	public function testSubstr_replace($string, $replacement, $start, $length, $expect)
	{
		$actual = JString::substr_replace($string, $replacement, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider ltrimData
	 * @since   11.2
	 */
	public function testLtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::ltrim($string);
		}
		else
		{
			$actual = JString::ltrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider rtrimData
	 * @since   11.2
	 */
	public function testRtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::rtrim($string);
		}
		else
		{
			$actual = JString::rtrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider trimData
	 * @since   11.2
	 */
	public function testTrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::trim($string);
		}
		else
		{
			$actual = JString::trim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider ucfirstData
	 * @since   11.2
	 */
	public function testUcfirst($string, $expect)
	{
		$actual = JString::ucfirst($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider ucwordsData
	 * @since   11.2
	 */
	public function testUcwords($string, $expect)
	{
		$actual = JString::ucwords($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider transcodeData
	 * @since   11.2
	 */
	public function testTranscode($source, $from_encoding, $to_encoding, $expect)
	{
		$actual = JString::transcode($source, $from_encoding, $to_encoding);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider validData
	 * @since   11.2
	 */
	public function testValid($string, $expect)
	{
		$actual = JString::valid($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider validData
	 * @since   11.2
	 */
	public function testCompliant($string, $expect)
	{
		$actual = JString::compliant($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function testParse_Url()
	{
		$url = 'http://localhost/joomla_development/j16_trunk/administrator/index.php?option=com_contact&view=contact&layout=edit&id=5';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		$url = 'http://joomla.org/mytestpath/È';
		$expected = parse_url($url);
		// Fix up path for UTF-8 characters
		$expected['path'] = '/mytestpath/È';
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test special characters in URL
		$url = 'http://mydomain.com/!*\'();:@&=+$,/?%#[]';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

	}
}
