<?php

namespace tplcom\StandWithCyprus\Test;

use Illuminate\Console\OutputStyle;
use tplcom\StandWithCyprus\StandWithCyprusServiceProvider;

/**
 * @internal
 *
 * @coversNothing
 */
final class StandWithCyprusProviderTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testWriteMessage(): void
    {
        $provider = new StandWithCyprusServiceProvider($this->app);
        $methodName = 'writeMessage';
        $reflection = new \ReflectionClass($provider);
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        $mock = \Mockery::mock(OutputStyle::class);

        $mock
            ->shouldReceive('writeln')
            ->with('<bg=blue>#StandWith</><bg=white>Cyprus</>')
            ->once()
        ;

        $method->invokeArgs($provider, [$mock]);
    }
}
