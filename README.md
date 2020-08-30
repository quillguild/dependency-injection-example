# DI examples and benchmarks

An example of the Dependency Injection usage.

You can find benchmark scripts which were used in this test in `public`
directory.

### Results 100/5

For 100 calls, where 5 were sent concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 1.029          | 97.18            | 0.0009                      |
| Dice          | 1.037          | 96.43            | 0.0009                      |
| PHP-DI        | 1.123          | 89.04            | 0.003                       |
| Symfony       | 1.135          | 88.1             | 0.006                       |

Run on PHP 7.4, Mac OS X, 2.6 GHz Quad-Core Intel Core i7, 16 GB 2133 MHz
LPDDR3. Tests were run several times, the best results were taken.

### Results 1,0000/1,000

The bigger differences are visible for 10,000 calls, where 1,000 were sent
concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 71.045         | 140.75           | 0.032                       |
| Dice          | 71.192         | 140.46           | 0.034                       |
| PHP-DI        | 75.768         | 131.98           | 0.082                       |
| Symfony       | 81.504         | 122.69           | 0.117                       |

### Results 1,000/100

For 1,000 calls, where 100 were sent concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 7.311          | 136.7            | 0.023                       |
| Dice          | 7.724          | 129.4            | 0.024                       |
| PHP-DI        | 8.568          | 116.7            | 0.073                       |
| Symfony       | 8.507          | 117.5            | 0.126                       |

### Results 1/1

For 1 call:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 7.311          | 136.7            | 0.023                       |
| Dice          | 7.724          | 129.4            | 0.024                       |
| PHP-DI        | 8.568          | 116.7            | 0.073                       |
| Symfony       | 8.507          | 117.5            | 0.126                       |

## Command to run

Quill DI:
```
php vendor/quillguild/benchmark/bin/benchmark.php benchmark:console "php public/quill-di.php" 1 1
```

Dice:
```
php vendor/quillguild/benchmark/bin/benchmark.php benchmark:console "php public/dice.php" 1 1
```

PHP-DI:
```
php vendor/quillguild/benchmark/bin/benchmark.php benchmark:console "php public/php-di.php" 1 1
```

Symfony:
```
php vendor/quillguild/benchmark/bin/benchmark.php benchmark:console "php public/symfony.php" 1 1
```