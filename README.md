# khmer-time-format (PHP)

Format `1:22 PM` / `13:22` into Khmer.

- digits: `ម៉ោង១ និង ២២ នាទី រសៀល`
- words: `ម៉ោងមួយ និង ម្ភៃពីរ នាទី រសៀល`

## Install

```bash
composer require your-vendor/khmer-time-format
```

## Usage

```php
use KhmerTimeFormat\KhmerTimeFormatter;

echo KhmerTimeFormatter::format("1:22 PM", "digits");
echo KhmerTimeFormatter::format("13:22", "words");
```

## Test

```bash
composer install
composer test
```

## Release (GitHub tags + Packagist)

```bash
git tag v0.1.0
git push --tags
```

Then submit your GitHub repo to Packagist (or enable webhook).
