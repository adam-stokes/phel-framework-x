<?php

declare(strict_types=1);

namespace Phel\Run\Domain\Repl;

final class InputResult
{
    private const NO_VALUE = 'no_value';
    private const LAST_RESULT_PLACEHOLDER = '$_';

    /** @var ?mixed */
    private $lastResult;

    /**
     * @param ?mixed $result
     */
    public static function fromAny($result): self
    {
        return new self($result);
    }

    public static function empty(): self
    {
        return new self(self::NO_VALUE);
    }

    /**
     * @param ?mixed $result
     */
    private function __construct($result)
    {
        $this->lastResult = $result;
    }

    public function readBuffer(array $buffer): string
    {
        $fullInput = implode(PHP_EOL, $buffer);

        if (self::NO_VALUE === $this->lastResult
            || !str_contains($fullInput, self::LAST_RESULT_PLACEHOLDER)
        ) {
            return $fullInput;
        }

        return preg_replace(
            '/"[^\\"]*(?:\\.|[^\\"]*)*"(*SKIP)(*F)|' . preg_quote(self::LAST_RESULT_PLACEHOLDER, '/') . '/',
            $this->formattedLastResult(),
            $fullInput
        );
    }

    private function formattedLastResult(): string
    {
        if (is_string($this->lastResult)) {
            return sprintf('"%s"', $this->lastResult);
        }

        if (is_bool($this->lastResult)) {
            return $this->lastResult ? 'true' : 'false';
        }

        if (is_null($this->lastResult)) {
            return 'nil';
        }

        return (string)$this->lastResult;
    }
}
