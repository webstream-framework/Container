<?php
namespace WebStream\Container\Test;

require_once dirname(__FILE__) . '/../Container.php';
require_once dirname(__FILE__) . '/../ValueProxy.php';
require_once dirname(__FILE__) . '/../Test/Providers/ContainerProvider.php';

use WebStream\Container\Container;
use WebStream\Container\ValueProxy;
use WebStream\Container\Test\Providers\ContainerProvider;

/**
 * ContainerTest
 * @author Ryuichi TANAKA.
 * @since 2016/08/20
 * @version 0.7
 */
class ContainerTest extends \PHPUnit_Framework_TestCase
{
    use ContainerProvider;

    /**
     * 正常系
     * 値を格納して取り出せること
     * @test
     * @dataProvider valueProvider
     */
    public function okContainer($value, $result)
    {
        $container = new Container();
        $container->test = $value;
        $this->assertEquals($container->test, $result);
    }
}
