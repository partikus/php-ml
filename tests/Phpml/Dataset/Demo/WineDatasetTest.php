<?php

declare(strict_types=1);

namespace tests\Phpml\Dataset\Demo;

use Phpml\Dataset\Demo\WineDataset;

class WineDatasetTest extends \PHPUnit_Framework_TestCase
{
    public function testLoadingWineDataset()
    {
        $wine = new WineDataset();

        // whole dataset
        $this->assertCount(178, $wine->getSamples());
        $this->assertCount(178, $wine->getTargets());

        // one sample features count
        $this->assertCount(13, $wine->getSamples()[0]);
    }
}
