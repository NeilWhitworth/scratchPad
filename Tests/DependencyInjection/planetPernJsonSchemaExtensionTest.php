<?php

namespace planetPern\jsonSchemaBundle\Tests\DependencyInjection;

use planetPern\jsonSchemaBundle\Tests\testCase;

use planetPern\jsonSchemaBundle\DependencyInjection\planetPernJsonSchemaExtension;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * @coversDefaultClass planetPern\jsonSchemaBundle\DependencyInjection\planetPernJsonSchemaExtension
 */
class planePernJsonSchemaExtensionTest extends testCase
{
    function createSUT()
    {
        return new planetPernJsonSchemaExtension;
    }

    /**
     * @coversNothing
     */
    public function test_Is_Extension()
    {
        $SUT = $this->createSUT();

        $this->assertInstanceOf(Extension::class, $SUT);
    }


    /**
     * @covers ::load
     * @uses planetPern\jsonSchemaBundle\DependencyInjection\Configuration::getConfigTreeBuilder
     */
    public function test_load()
    {
        $SUT = $this->createSUT();

        $mockContainerBuilder = $this->getMockBuilder(ContainerBuilder::class)
            ->getMock();

        $SUT->load([], $mockContainerBuilder);

        $this->assertTrue(true);
    }
}
