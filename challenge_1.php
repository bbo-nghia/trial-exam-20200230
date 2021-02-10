<?php

function connectSticks($sticks = []) {
    sort($sticks);

    $cost = 0;
    while (count($sticks) > 1) {
        $first = $sticks[0];
        array_shift($sticks);
        $second = $sticks[0];
        array_shift($sticks);
        $cost += $first + $second;
        array_unshift($sticks, $first + $second);
    }

    return $cost;
}

echo connectSticks([2,3,4]) . PHP_EOL;
echo connectSticks([1,8,3,5]) . PHP_EOL;
echo connectSticks([5]) . PHP_EOL;
