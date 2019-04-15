<?php
declare(strict_types=1);

include 'romanToNumber.php';

use PHPUnit\Framework\TestCase;

final class RomanToNumberTest extends TestCase {

  public function testIDonne1() {
    $this->assertEquals(
      '1',
      romanToNumber('I')
    );
  }

  public function testVDonne5() {
    $this->assertEquals(
      '5',
      romanToNumber('V')
    );
  }

}


