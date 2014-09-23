<?php
namespace Payum\Core\Tests\Request;

class CaptureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfGeneric()
    {
        $rc = new \ReflectionClass('Payum\Core\Request\Capture');
        
        $this->assertTrue($rc->isSubclassOf('Payum\Core\Request\Generic'));
    }
}