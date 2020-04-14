<?php declare(strict_types=1);

require __DIR__ . "/../trim-function.php";
use PHPUnit\Framework\TestCase;

final class TrimFunctionTest extends TestCase {

    public function testTrimString (): void {
        $string = 'HEllo';
        $this->assertEquals('hello', trimString($string));
    }

}