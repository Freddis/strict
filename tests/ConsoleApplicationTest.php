<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Strict\Controllers\Applications\CliApplication;
use Strict\Controllers\Parameters\CliParamManager;
use Strict\Controllers\Routing\StrictInternalCliRouter;
use Strict\Tools\Collections\Lists\StringList;


class ConsoleApplicationTest extends TestCase
{
    public function testConsoleApplication()
    {
        $manager = new CliParamManager(StringList::safeFromArray(["./index.php","codegen"]));
        $app = new CliApplication($manager, new StrictInternalCliRouter($manager));
        $view = $app->run();
        $result = $view->render();
        $this->assertStringContainsString("The list of commands:", $result);
    }
}
