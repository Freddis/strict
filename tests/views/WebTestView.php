<?php declare(strict_types=1);

namespace StrictTest\Views;

use Strict\Views\WebView;

class WebTestView extends WebView
{

    public function printHtml(): void
    { ?>
        <div>Test html</div>
        <?php
    }
}
