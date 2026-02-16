# khmer-format (PHP)

Khmer formatting utilities for time and money.

## Install

```bash
composer require konthaina/khmer-format
```

## Time Formatter

```php
require_once __DIR__ . '/vendor/autoload.php';

use KhmerFormat\KhmerTimeFormatter;

echo KhmerTimeFormatter::format("1:22 PM", "digits"); // ម៉ោង១ និង ២២ នាទី រសៀល
echo KhmerTimeFormatter::format("13:22", "words");    // ម៉ោងមួយ និង ម្ភៃពីរ នាទី រសៀល
echo KhmerTimeFormatter::formatNow("digits");
echo KhmerTimeFormatter::formatNow("words", "Asia/Phnom_Penh");
```

Features:
- Accepts 12-hour (`1:22 PM`) and 24-hour (`13:22`) input.
- Outputs Khmer time in digits or Khmer words.
- Includes `formatNow()` for real current time.
- Supports timezone input (for example `Asia/Phnom_Penh`).

## Money Formatter

```php
use KhmerFormat\KhmerMoneyFormatter;

echo KhmerMoneyFormatter::formatKHR(15000);              // ១៥,០០០ ៛
echo KhmerMoneyFormatter::formatUSD(15000);              // $15,000.00
echo KhmerMoneyFormatter::toKhmerWordsKHR(15000);        // មួយម៉ឺនប្រាំពាន់ រៀល
echo KhmerMoneyFormatter::toKhmerWordsUSD(15000);        // មួយម៉ឺនប្រាំពាន់ ដុល្លារ
echo KhmerMoneyFormatter::format('KHR', 15000, false);   // 15,000 ៛
echo KhmerMoneyFormatter::format('USD', 15000);          // $15,000.00
```

Features:
- KHR formatting with no decimals.
- USD formatting with 2 decimals.
- Khmer word output for KHR and USD.
- Proper currency symbols (`៛`, `$`).

## Test

```bash
composer install
composer test
```

## Release

```bash
git tag v0.3.2
git push --tags
```

Then update the package on Packagist (or use webhook auto-update).
