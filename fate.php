<?php

$stars = [
    '巳' => [],
    '午' => [],
    '未' => [],
    '申' => [],
    '辰' => [],
    '酉' => [],
    '卯' => [],
    '戌' => [],
    '寅' => [],
    '丑' => [],
    '子' => [],
    '亥' => [],
];

// https://medium.com/@williamaktliu/%E5%8D%81%E5%9B%9B%E4%B8%BB%E6%98%9F%E7%B0%A1%E4%BE%BF%E5%AE%89%E6%98%9F%E6%B3%95-%E7%B4%AB%E5%BE%AE%E6%96%97%E6%95%B8-798994e86fc

function to_next (&$array) {
    if (next($array)) {
        prev($array);
        return next($array);
    } else {
        reset($array);
        return current($array);
    }
}

function to_prev (&$array) {
    if (prev($array)) {
        next($array);
        return prev($array);
    } else {
        end($array);
        return current($array);
    }
}

function reset_to (&$array, $time_start) {
    $position = array_search($time_start, $array);
    for($i = 0; $i < $position; $i++) {
        to_next($array);
    }
}

// 紫微在子
$times = [
    '子',
    '丑',
    '寅',
    '卯',
    '辰',
    '巳',
    '午',
    '未',
    '申',
    '酉',
    '戌',
    '亥',
];

$time_start = $_GET['t'] ?? '子';
reset_to($times, $time_start);

// 一個星座由紫微帶領，順地支而行：紫機○陽，武同○○廉。
// 紫機陽武同 廉
$stars[current($times)][] = '紫微';
$stars[to_prev($times)][] = '天機';
to_prev($times);
$stars[to_prev($times)][] = '太陽';
$stars[to_prev($times)][] = '武曲';
$stars[to_prev($times)][] = '天同';
to_prev($times);
to_prev($times);
$stars[to_prev($times)][] = '廉貞';

// print_r($stars);
// exit;

reset($times);

$reverse_time = [
    '子' => '辰',
    '丑' => '卯',
    '寅' => '寅',
    '卯' => '丑',
    '辰' => '子',
    '巳' => '亥',
    '午' => '戌',
    '未' => '酉',
    '申' => '申',
    '酉' => '未',
    '戌' => '午',
    '亥' => '巳',
];

// // 另一星座由天府帶領，逆地支而行：府陰貪巨相，梁殺○○○破。
// // 紫微、天府相對「寅申軸」對稱。
// // 找到天府位置
$reverse_start_time = $reverse_time[$time_start];
$stars[$reverse_start_time][] = '天府';
$reverse_position = array_search($reverse_start_time, $times);
// 到達天府位置所在的時辰
for($i = 0; $i < $reverse_position; $i++) {
    to_next($times);
}
$stars[to_next($times)][] = '太陰';
$stars[to_next($times)][] = '貪狼';
$stars[to_next($times)][] = '巨門';
$stars[to_next($times)][] = '天相';
$stars[to_next($times)][] = '天梁';
$stars[to_next($times)][] = '七殺';
to_next($times);
to_next($times);
to_next($times);
$stars[to_next($times)][] = '破軍';

// print_r($stars);

function print_cell($stars, $time) {
    echo '<div>';
    echo '<div class="stars">';

    foreach ($stars[$time] as $star) {
        echo "<div class='star'>{$star}</div>";
    }

    echo "</div>";
    echo '<div class="time">';
    echo $time . '（&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;）';
    echo '</div>';
    echo '</div>';
}