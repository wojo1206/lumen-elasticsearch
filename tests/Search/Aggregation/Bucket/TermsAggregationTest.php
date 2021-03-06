<?php namespace Nord\Lumen\Elasticsearch\Tests\Search\Aggregation\Bucket;

use Nord\Lumen\Elasticsearch\Search\Aggregation\Bucket\TermsAggregation;
use Nord\Lumen\Elasticsearch\Tests\Search\Aggregation\AbstractAggregationTestCase;

class TermsAggregationTest extends AbstractAggregationTestCase
{
    public function testToArray()
    {
        $aggregation = new TermsAggregation();

        $aggregation->setField('field_name');

        $this->assertEquals([
            'terms' => ['field' => 'field_name'],
        ], $aggregation->toArray());
    }

    public function testMinDocCountToArray()
    {
        $aggregation = new TermsAggregation();

        $aggregation->setField('field_name')->setMinDocCount(10);

        $this->assertEquals([
            'terms' => ['field' => 'field_name', 'min_doc_count' => 10],
        ], $aggregation->toArray());
    }
}
