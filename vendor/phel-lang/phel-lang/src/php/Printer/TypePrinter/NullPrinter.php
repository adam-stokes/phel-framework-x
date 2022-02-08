<?php

declare(strict_types=1);

namespace Phel\Printer\TypePrinter;

final class NullPrinter implements TypePrinterInterface
{
    use WithColorTrait;

    /**
     * @param mixed $form
     */
    public function print($form): string
    {
        return $this->color('nil');
    }

    private function color(string $str): string
    {
        if ($this->withColor) {
            return sprintf("\033[0;96m%s\033[0m", $str);
        }

        return $str;
    }
}
