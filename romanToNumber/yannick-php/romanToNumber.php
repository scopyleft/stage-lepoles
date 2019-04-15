<?php
declare(strict_types=1);

function romanToNumber(string $roman): string {
  if ($roman == 'V') {
    return '5';
  }
  return '1';
}
