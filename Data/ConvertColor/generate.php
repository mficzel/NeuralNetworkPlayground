<?php
for ($i = 0; $i <= 10000; $i++) {
    $r = rand(0, 1000) / 1000;
    $g = rand(0, 1000) / 1000;
    $b = rand(0, 1000) / 1000;

    list($h, $s, $l) = rgb_to_hsl($r, $g, $b);
    echo implode(',', [$r, $g, $b, $h, $s, $l]) . PHP_EOL;
}

function rgb_to_hsl(float $r, float $g, float $b): array
{
    $max = max($r, $g, $b);
    $min = min($r, $g, $b);

    $l = ($max + $min) / 2;

    if ($max == $min) {
        $h = $s = 0;
    } else {
        $d = $max - $min;
        $s = $l > 0.5 ? $d / (2 - $max - $min) : $d / ($max + $min);

        switch ($max) {
            case $r: $h = ($g - $b) / $d + ($g < $b ? 6 : 0); break;
            case $g: $h = ($b - $r) / $d + 2; break;
            case $b: $h = ($r - $g) / $d + 4; break;
            default:
                throw  new \Exception('this should never happen');
        }

        $h /= 6;
    }

    return [
        round($h, 3),
        round($s, 3),
        round($l, 3)
    ];
}