<?php

/**
 * 快速排序
 * 
 * 思路分析： 从数列中挑出一个元素，称为 “基准” (pivot)
 * 
 * 重新排序数列，所有元素比基准小的摆放在基准面前, C 语言中的 qsort 就是快速排序
 * 所有元素比基准大的摆在基准的后面（相同的数可以放到任一边）
 * 递归地（recursive） 把小于基准值元素的自数列和大于基准元素的子数列排序
 * 
 */

 function QuickSort(array $container)
 {
     $count = count($container);
     if ($count <= 1) { // 基线条件为空或者只包含一个元素，只需要原样返回数组
        return $container;
     }
     $pivot = $container[0]; // 基准值 pivot
     $left = $right = [];

     for ($i = 1; $i < $count; $i++) {
         if ($container[$i] < $pivot) {
             $left[] = $container[$i];
         } else {
             $right[] = $container[$i];
         }
     }
     $left = QuickSort($left);
     $right = QuickSort($right);
     return array_merge($left, [$container[0]], $right);
 }

 var_dump(QuickSort([23, 34, 56, 12, 32, 99, 23, 1, 6]));