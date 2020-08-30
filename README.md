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

### Results 1000/100

For 1000 calls, where 1000 were sent concurrently:

| PHP Container | Took (seconds) | Calls per second | Average call time (seconds) |
|---------------|----------------|------------------|-----------------------------|
| Quill DI      | 7.311          | 136.7            | 0.023                       |
| Dice          | 7.724          | 129.4            | 0.024                       |
| PHP-DI        | 8.568          | 116.7            | 0.073                       |
| Symfony       | 8.507          | 117.5            | 0.126                       |
