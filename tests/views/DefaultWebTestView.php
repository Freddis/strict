<?php declare(strict_types=1);

namespace StrictTest\Views;

use Strict\Views\WebView;

class DefaultWebTestView extends WebView
{

    public function printHtml(): void
    { ?>
        <div>Default HTML</div>
        <?php
    }
}
