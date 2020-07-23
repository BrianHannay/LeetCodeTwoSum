<?php

/** 
 * Problem:
 * https:/leetcode.com/problems/two-sum/
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * Solution:
 * For every number, identify the number needed to achieve the target, and check if it's in $nums.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $checkNums = [];
        foreach($nums as $i => $num) {
            $tn = $target-$num;
            if(in_array($tn, $checkNums)) {
                return [$i, array_search($tn, $nums)];
            }
            $checkNums[] = $num;
        }
    }
}
