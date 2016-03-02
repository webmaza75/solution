<?php
/**
 * Перевертывание строки символов, 2 варианта
 */

/**
 * @param string $string строка в формате utf-8
 * @return string
 */
function useIconv($string) {
    $string = iconv('utf-8', 'windows-1251', $string);
    $string = strrev($string);
    $string = iconv('windows-1251', 'utf-8', $string);
    return $string;
}

/**
 * @param string $string строка в формате utf-8
 * @return string
 */
function strrevArr($string)
{
    preg_match_all('/./mus', $string, $arr);
    $string = implode('', array_reverse($arr[0]));
    return $string;
}

$string = 'Это же символ евро: €';
echo $string = 'Это же символ евро: €';
echo '<br>';

echo useIconv($string);
echo '<br>';

$string = 'Это же символ евро: €';
echo strrevArr($string);

