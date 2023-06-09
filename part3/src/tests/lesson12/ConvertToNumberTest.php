<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/lesson12/ConvertToNumber.php');

final class ConvertToNumberTest extends TestCase
{
    public function testConvertToNumber(): void
    {
        $this->assertSame(['7'], convertToNumber('C7'));
        $this->assertSame(['3', '10', 'A'], convertToNumber('H3', 'S10', 'DA'));
    }
}
