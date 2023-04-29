<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $length = count($nums);
        $fVal = 0;
        $sVal = 0;

        for ($i = 0; $i < $length; $i++) {
            $fVal = $nums[$i];

            for ($r = 0; $r < $length; $r++) {
                $sVal = $nums[$r];
                if ($i == $r) {
                    continue;
                }
                if ($fVal + $sVal == $target) {
                    return array($i, $r);
                }
            }
        }
    }
}
