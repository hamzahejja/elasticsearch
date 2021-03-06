<?php

namespace AviationCode\Elasticsearch\Tests\Unit\Model\Aggregations\Metric;

use AviationCode\Elasticsearch\Model\Aggregations\Metric\Cardinality;
use AviationCode\Elasticsearch\Tests\Unit\TestCase;

class CardinalityTest extends TestCase
{
    /** @test */
    public function it_translates_cardinality()
    {
        $cardinality = new Cardinality(['value' => 8]);

        $this->assertEquals(8, $cardinality->value());
    }
}
