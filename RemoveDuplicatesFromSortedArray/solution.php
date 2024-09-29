<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $uniqueCount = count($nums);
        $count = 0;
        while($count !== count($nums)) {
            if ($nums[$count] === $nums[$count + 1]) {
                unset($nums[$count]);
                $nums[] = -99;
                $uniqueCount--;
            }
            $count++;

        }
        return $uniqueCount;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates2(&$nums) {
        $dublicates = [];
        $unique = [];
        foreach($nums as $key => $num) {
            if ($num === $nums[$key + 1]) {
                $dublicates[] = $num;
            } else {
                $unique[] = $num;
            }
        }

        $nums = array_merge($unique, $dublicates);
        return count($unique);
    }
}

