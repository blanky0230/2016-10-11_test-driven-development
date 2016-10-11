<?php

/**
 * Created by PhpStorm.
 * User: maj
 * Date: 11.10.16
 * Time: 21:00
 */
require './PigLatin.php';

class PigLatinTest extends PHPUnit_Framework_TestCase
{
	public function testClassExists()
	{
		$testObj = new PigLatin();
		$this->assertInstanceOf(PigLatin::class, $testObj);
	}

	public function testFunctionExists()
	{
		$testObj = new PigLatin();
		$this->assertTrue(method_exists($testObj, 'latinize'), 'Method latinize does not exist');
	}

	public function testFirstLetterVowl()
	{
		$testObj = new PigLatin();
		$this->assertEquals('appleay', $testObj->latinize('apple'));
	}

	public function testFirstLettVowlDifferentWord()
	{
		$testObj = new PigLatin();
		$this->assertEquals('orangeay', $testObj->latinize('orange'));
	}

	public function testFirstLetterConsonant()
	{
		$testObj = new PigLatin();
		$this->assertEquals('irdbay', $testObj->latinize('bird'));
	}

	public function testTwoWordsPhrase()
	{
		$testObj = new PigLatin();
		$this->assertEquals('ellowyay irdbay', $testObj->latinize('yellow bird'));
	}

	public function testConsonantClusterCh()
	{
		$testObj = new PigLatin();
		$this->assertEquals('airchay', $testObj->latinize('chair'));
	}

	public function testConsonantClusterQu()
	{
		$testObj = new PigLatin();
		$this->assertEquals('aresquay', $testObj->latinize('square'));
	}

	public function testConsonantClusterSuez()
	{
		$testObj = new PigLatin();
		$this->assertEquals('uezcanalsay', $testObj->latinize('suezcanal'));
	}

	public function testClusterXrLikeVowl()
	{
		$testObj = new PigLatin();
		$this->assertEquals('xrayay', $testObj->latinize('xray'));
	}

	public function testClusterXrmLikeVowl()
	{
		$testObj = new PigLatin();
		$this->assertEquals('xrmayay', $testObj->latinize('xrmay'));
	}
}