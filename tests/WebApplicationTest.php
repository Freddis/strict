<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Strict\Controllers\Applications\WebApplication;
use Strict\Controllers\Parameters\WebParamManager;
use Strict\Tools\Collections\Dictionaries\StringDictionary;
use StrictTest\Controllers\Routing\WebTestRouter;


class WebApplicationTest extends TestCase
{
    public function testWebApplication()
    {
        $server = [
          "REQUEST_URI" => "/"
        ];
        $manager = new WebParamManager(StringDictionary::safeFromArray($server));
        $app = new WebApplication($manager, new WebTestRouter($manager));
        $view = $app->run();
        $result = $view->render();
        $this->assertStringContainsString("<div>Test html</div>", $result);
    }
}
