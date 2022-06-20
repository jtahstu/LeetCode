<?php
/**
 * Created by PhpStorm
 * User: jtahstu
 * Time: 2022/6/20 11:06
 * Desc: 190. 颠倒二进制位
 *       https://leetcode.cn/problems/reverse-bits/
 *       颠倒给定的 32 位无符号整数的二进制位。
 *       提示：
 *          请注意，在某些语言（如 Java）中，没有无符号整数类型。在这种情况下，输入和输出都将被指定为有符号整数类型，并且不应影响您的实现，因为无论整数是有符号的还是无符号的，其内部的二进制表示形式都是相同的。         在 Java 中，编译器使用二进制补码记法来表示有符号整数。因此，在 示例 2 中，输入表示有符号整数 -3，输出表示有符号整数 -1073741825。
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n)
    {
        $str = decbin($n);
        $str = str_repeat('0', 32-strlen($str)) . $str;
        var_dump($str);
        return bindec(strrev($str));
    }
}

/**
 * 执行用时：4 ms, 在所有 PHP 提交中击败了71.43%的用户
 * 内存消耗：18.7 MB, 在所有 PHP 提交中击败了42.86%的用户
 * 通过测试用例：600 / 600
 */