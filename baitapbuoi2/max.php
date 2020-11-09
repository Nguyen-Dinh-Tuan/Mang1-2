<?php
$arr = array(
    [1, 2, 3, 4, 5, 6],
    [8, 9, 7, 6, 5, 4],
    [7, 5, 7, 1, 2, 3],
);
$max = $arr[0][0];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
        }
    }
}
echo "Gia tri lon nhat la :" . $max;