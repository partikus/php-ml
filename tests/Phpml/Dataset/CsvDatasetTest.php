<?php

declare(strict_types=1);

namespace tests\Phpml\Dataset;

use Phpml\Dataset\CsvDataset;

class CsvDatasetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Phpml\Exception\DatasetException
     */
    public function testThrowExceptionOnMissingFile()
    {
        new CsvDataset('missingFile', 3);
    }

    public function testSampleCsvDatasetWithHeaderRow()
    {
        $filePath = dirname(__FILE__).'/Resources/dataset.csv';

        $dataset = new CsvDataset($filePath, 2, true);

        $this->assertCount(10, $dataset->getSamples());
        $this->assertCount(10, $dataset->getTargets());
    }

    public function testSampleCsvDatasetWithoutHeaderRow()
    {
        $filePath = dirname(__FILE__).'/Resources/dataset.csv';

        $dataset = new CsvDataset($filePath, 2, false);

        $this->assertCount(11, $dataset->getSamples());
        $this->assertCount(11, $dataset->getTargets());
    }
}
