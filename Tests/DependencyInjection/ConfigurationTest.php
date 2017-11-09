<?php

namespace planetPern\jsonSchemaBundle\Tests\DependencyInjection;

use planetPern\jsonSchemaBundle\Tests\testCase;
use planetPern\jsonSchemaBundle\DependencyInjection\Configuration;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @coversDefaultClass planetPern\jsonSchemaBundle\DependencyInjection\Configuration
 */
class ConfigurationTest extends testCase
{
    function createSUT()
    {
        return new Configuration;
    }

    /**
     * @coversNothing
     */
    public function test_Is_Configuration()
    {
        $SUT = $this->createSUT();

        $this->assertInstanceOf(ConfigurationInterface::class, $SUT);
    }

    /**
     * @covers ::getConfigTreeBuilder
     */
    public function test_getConfigTreeBuilder_returns_TreeBuilder()
    {
        $SUT = $this->createSUT();
        $results = $SUT->getConfigTreeBuilder();

        $this->assertInstanceOf(TreeBuilder::class, $results);
    }
}
