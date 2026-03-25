<?php
for ($i = 0; $i <= 10000; $i++) {
    $arrayUnsorted = [
        rand(-1000, 1000) / 1000,
        rand(-1000, 1000) / 1000,
        rand(-1000, 1000) / 1000,
    ];
    $arraySorted = $arrayUnsorted;
    sort($arraySorted);
    echo implode(',', [...$arrayUnsorted, ...$arraySorted]) . PHP_EOL;
}