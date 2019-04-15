# Roman To Number en PHP et en TDD

Je commence par installer PHP et PHPUnit sur ma machine

```bash
sudo apt install php phpunit
```

J'écris un premier cas de tests simple : I donne 1 (en copiant collant le [code example sur phpunit](https://phpunit.de/getting-started/phpunit-8.html).

Ça donne

```php
<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanToNumberTest extends TestCase {

  public function testIDonne1(): void {
    $this->assertEquals('1', romanToNumber('I'));
  }

}
```

l'execution donne

```bash
~/ $ phpunit --testdox romanToNumberTest.php
PHPUnit 5.4.6 by Sebastian Bergmann and contributors.

RomanToNumber
 [ ] I donne 1

```

ou

```bash
~/ $ phpunit romanToNumberTest.php
PHPUnit 5.4.6 by Sebastian Bergmann and contributors.

E                                                                   1 / 1 (100%)

Time: 30 ms, Memory: 4.00MB

There was 1 error:

1) RomanToNumberTest::testIDonne1
Error: Call to undefined function romanToNumber()

/home/yaf/Scopyleft/stage-lepoles/romanToNumber/yannick-php/romanToNumberTest.php:9

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
```

Un peu plus verbeux, ce dernier affichage est celui par défaut. Il a le mérite d'afficher clairement l'erreur (et non la failure, attention la différence est importante :)).


Ensuite, il faut faire passer au vert au plus vite :

```php
<?php
declare(strict_types=1);

function romanToNumber(string $roman): string {
  return '1';
}
```

Et ensuite, on écrit le test suivant. Celui qui, par exemple, donne 5 pour V

```php
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
```

L'execution donne :

```bash
~/ $ phpunit romanToNumberTest.php
PHPUnit 5.4.6 by Sebastian Bergmann and contributors.

.F                                                                  2 / 2 (100%)

Time: 34 ms, Memory: 4.00MB

There was 1 failure:

1) RomanToNumberTest::testVDonne5
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'5'
+'1'

/home/yaf/Scopyleft/stage-lepoles/romanToNumber/yannick-php/romanToNumberTest.php:20

FAILURES!
Tests: 2, Assertions: 2, Failures: 1.

```

Et l'évolution la plus rapide pour passer au vert :

```php
<?php
declare(strict_types=1);

function romanToNumber(string $roman): string {
  if ($roman == 'V') {
    return '5';
  }
  return '1';
}
```

Ensuite, on peut envisager un refactoring... Puis un nouveau test... Et ainsi de suite, jusqu'à pouvoir traduire `MCMLXXVII`

Le code source [romanToNumber.php](romanToNumber.php) et [romanToNumberTest.php](romanToNumberTest.php)
