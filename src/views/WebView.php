<?php declare(strict_types=1);

namespace Strict\Views;

abstract class WebView extends View
{
    public function render(): string {
        ob_start();
        $this->printHtml();
        $html = ob_get_clean();
        return $html;
    }

    abstract public function printHtml() : void;
}
