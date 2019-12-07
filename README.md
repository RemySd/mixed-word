# Mixe your words with specifics blenders !

![Packagist Version](https://img.shields.io/packagist/v/remysd/mixed-word)
![PHP from Packagist](https://img.shields.io/packagist/php-v/remysd/mixed-word)
![PHP from Packagist](https://img.shields.io/packagist/l/remysd/mixed-word)
![CircleCI](https://img.shields.io/circleci/build/github/RemySd/mixed-word/master)

## Installation

```bash
composer require remysd/fir_builder
```

## Example

```php
$blender = new Blender();
$wordMixed = $blender->mixe('hello', Blender::BLENDER_REVERSE);

echo $wordMixed;
```

### Result

```bash
"olleh"
```

## Blender List

* BlenderReverse
* BlenderRandom
* BlenderNotVowels
