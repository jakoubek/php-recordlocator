<?php

require_once(__DIR__ . '/../src/RecordLocator.php');

class RecordLocatorTest extends PHPUnit_Framework_TestCase {

    private $generator;

    public function setUp()
    {
        $this->generator = new RecordLocator;
    }

    public function testEncoding()
    {
        $string = $this->generator->encode(35000);
        $this->assertEquals("347R", $string);
    }

    public function testDecoding()
    {
        $integer = $this->generator->decode("347R");
        $this->assertEquals(35000, $integer);
    }

}