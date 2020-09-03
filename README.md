# DI examples and benchmarks

An example of the Dependency Injection usage.

You can find benchmark scripts which were used in this test in `public`
directory. Tested libraries:
- Quill DI: https://github.com/quillstack/di
- Dice: https://github.com/Level-2/Dice
- PHP-DI: https://github.com/PHP-DI/PHP-DI
- Symfony: https://github.com/symfony/dependency-injection
- Laminas DI: https://github.com/laminas/laminas-di
- Aura.Di: https://github.com/auraphp/Aura.Di

All tests were run on PHP 7.4, Mac OS X, 2.6 GHz Quad-Core Intel Core i7,
16 GB 2133 MHz LPDDR3. Tests were run several times, the best results
were taken.

### Results 10,000/1,000

The biggest differences are visible for 10,000 calls, where 1,000 were sent
concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 71.045         | 140.75           | 0.032                       |
| Dice          | 71.192         | 140.46           | 0.034                       |
| Aura.Di       | 71.462         | 139.93           | 0.027                       |
| PHP-DI        | 75.768         | 131.98           | 0.082                       |
| Laminas DI    | 78.962         | 126.64           | 0.0506                      |
| Symfony       | 81.504         | 122.69           | 0.117                       |

### Results 1,000/100

For 1,000 calls, where 100 were sent concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 7.311          | 136.7            | 0.023                       |
| Dice          | 7.724          | 129.4            | 0.024                       |
| Aura.Di       | 7.829          | 127.7            | 0.024                       |
| Laminas DI    | 8.198          | 121.9            | 0.048                       |
| PHP-DI        | 8.568          | 116.7            | 0.073                       |
| Symfony       | 8.507          | 117.5            | 0.126                       |

### Results 100/5

For 100 calls, where 5 were sent concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 0.922          | 108.4            | 0.0008                      |
| Aura.Di       | 0.95           | 105.2            | 0.0013                      |
| Laminas DI    | 0.997          | 100.3            | 0.0009                      |
| Dice          | 1.037          | 96.43            | 0.002                       |
| PHP-DI        | 1.123          | 89.04            | 0.003                       |
| Symfony       | 1.135          | 88.1             | 0.006                       |

### Results 1/1

For 1 call:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 0.065          | 15.38            | 0.0006                      |
| Dice          | 0.065          | 15.38            | 0.0006                      |
| Aura.Di       | 0.066          | 15.15            | 0.001                       |
| Laminas DI    | 0.066          | 15.15            | 0.0019                      |
| PHP-DI        | 0.067          | 14.92            | 0.0025                      |
| Symfony       | 0.069          | 14.49            | 0.0044                      |

## Memory / included files tests

Results of tests to check memory usage and included files:

| PHP Container | Time  | Memory | Files |
|---------------|-------|--------|-------|
| Quill DI      | 0.765 | 0.63   | 27    |
| PHP-DI        | 0.799 | 0.85   | 44    |
| Aura.Di       | 1.99  | 0.69   | 28    |
| Symfony       | 2.52  | 1.16   | 41    |
| Dice          | 16.33 | 0.7    | 23    |
| Laminas DI    | 41.86 | 0.8    | 38    |

PHP pseudocode to generate these results:

```php
for ($i = 0; $i < 10000000; ++$i) {
    $controller = $container->get(ExampleController::class);
}
```

You can find scripts to run in `public/benchmark` directory.

## Command to run

Quill DI:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/quill-di.php" 1 1
php public/benchmark/quill-di.php
```

Dice:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/dice.php" 1 1
php public/benchmark/dice.php
```

PHP-DI:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/php-di.php" 1 1
php public/benchmark/php-di.php
```

Symfony:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/symfony.php" 1 1
php public/benchmark/symfony.php
```

Laminas DI:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/laminas-di.php" 1 1
php public/benchmark/laminas-di.php
```

Aura.Di:
```
php vendor/quillstack/benchmark/bin/benchmark.php benchmark:console "php public/aura-di.php" 1 1
php public/benchmark/aura-di.php
```

## Quill Stack

If you want to know more about other solutions, visit the website: \
https://quillstack.com/ 

![The Quill Stack](https://raw.githubusercontent.com/quillstack/quillstack.com/master/docs/quillstack.png)
