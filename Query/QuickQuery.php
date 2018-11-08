<?php

function QuickQuery($array, $k, $low = 0, $high = 0)
{
    //判断是否为第一次调用
    if (count($array) != 0 and $high == 0) {
        $high = count($array);
    }
    //如果还存在剩余的数组元素
    if ($low <= $high) {
        //取$low和$high的中间值
        $mid = intval(($low + $high) / 2);
        //如果找到则返回
        if ($array[$mid] == $k) {
            return $mid;
        } else if ($k < $array[$mid]) {//如果没有找到，则继续查找
            return QuickQuery($array, $k, $low, $mid - 1);
        } else {
            return QuickQuery($array, $k, $mid + 1, $high);
        }
    }
    return -1;
}

echo QuickQuery([1, 2, 3, 4, 5, 6, 7, 8], 8);