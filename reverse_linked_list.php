<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $cur = $head;
        $prev = null;
        while($cur != null)
        {
            $temp = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $temp;
        }
        return $prev;
    }
}

$solution = new Solution();
$result = $solution->reverseList([1,2,3,4,5]);
print_r($result);