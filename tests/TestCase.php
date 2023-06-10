<?php

namespace tplcom\StandWithCyprus\Test;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as TestbenchTestCase;
use tplcom\StandWithCyprus\StandWithCyprusServiceProvider;

/**
 * @internal
 * @coversNothing
 */
abstract class TestCase extends TestbenchTestCase
{
    /**
     * Get package providers.
     *
     * @param Application $app
     */
    protected function getPackageProviders($app): array
    {
        return [
            StandWithCyprusServiceProvider::class,
        ];
    }
}
