<?php
namespace WebStream\Container\Test\Providers;

/**
 * ContainerProvider
 * @author Ryuichi TANAKA.
 * @since 2016/08/20
 * @version 0.7
 */
trait ContainerProvider
{
    public function valueProvider()
    {
        $func = function() {
            return "test";
        };

        return [
            ["test", "test"],
            [123, 123],
            [true, true],
            [$func, "test"]
        ];
    }
}
