<?php

namespace planetPern\jsonSchemaBundle\Tests;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use planetPern\jsonSchemaBundle\planetPernJsonSchemaBundle;

use planetPern\jsonSchemaBundle\Tests\testCase;

/**
 * @coversDefaultClass planetPern\jsonSchemaBundle\planetPernJsonSchemaBundle
 */
class planetPernJsonSchemaBundleTest extends testCase
{
    function createSUT()
    {
        return new planetPernJsonSchemaBundle;
    }

    /**
     * @coversNothing
     */
    public function test_Is_Bundle()
    {
        $SUT = $this->createSUT();

        $this->assertInstanceOf(Bundle::class, $SUT);
    }
}
