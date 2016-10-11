<?php
require 'PigLatin.php';

/**
 * Created by PhpStorm.
 * User: burned
 * Date: 11.10.16
 * Time: 21:13
 */
class PigLatinTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PigLatin
     */
    protected $pigLatin;

    protected function setUp()
    {
        $this->pigLatin = new PigLatin();
    }
    
    public function testBeginsWithVowel()
    {
        $this->assertEquals('appleay', $this->pigLatin->piggify('apple'));
    }

    public function testBeginsWithConsonant()
    {
        $this->assertEquals('irdbay', $this->pigLatin->piggify('bird'));
        $this->assertEquals('ancay', $this->pigLatin->piggify('can'));
    }

    public function testCompleteSentence()
    {
        $this->assertEquals('aay ellowyay irdbay', $this->pigLatin->piggify('a yellow bird'));
    }

    public function testConsonantsClusters()
    {
        $this->assertEquals('airchay', $this->pigLatin->piggify('chair'));
        $this->assertEquals('aresquay', $this->pigLatin->piggify('square'));
    }
}