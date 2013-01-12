<?php

namespace McGowanCorp\Tests;

use \McGowanCorp\Object;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $source_path = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src') . DIRECTORY_SEPARATOR;
        require_once $source_path . 'Object.php';
    }
    
    public function testClassName()
    {
        $object = new Object;
        $this->assertEquals('McGowanCorp\Object', $object->getClassName());
    }
    
    public function testObjectHash()
    {
        $object = new Object;
        $hash   = spl_object_hash($object);
        
        $this->assertEquals($hash, $object->getObjectHash());
    }
    
    public function testToString()
    {
        $object = new Object;
        
        $name = get_class($object);
        $hash = spl_object_hash($object);
        $string = sprintf('%s [ %s ]', $name, $hash);
        
        $this->assertEquals($string, $object->toString());
        
        $this->expectOutputString($string);
        print $object;
    }
}