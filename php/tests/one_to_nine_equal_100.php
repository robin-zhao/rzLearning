<?php

/**
 * list possiblilities where +, - or empty signs are present between each one of 1 to 9,
 * the math result still equals to 100.
 *
 * For example, print following line if it equals to 100.
 * 1+234-5-6+78+9 == 100
 */

/**
 * 1) pow(3, 8) cases.
 *
 * 2)
 */
//$matches = [];
//
//foreach (range(1, pow(3, 8)) as $each) {
//
//    $string = getString($each);
//    if (calculateString($string) == 100) {
//        $matches [] = $string;
//    }
//}
//
//var_dump($matches);

function getString($dec)
{

    $base3 = dec2base($dec, 3);
    
    $pattern = str_pad($base3, 8, '0', STR_PAD_LEFT);
    $pattern = str_replace('0', ' ', $pattern);
    $pattern = str_replace('1', '+', $pattern);
    $pattern = str_replace('2', '-', $pattern);

    $string = [];
    foreach (range(1, 8) as $each) {
        $string[] = $each;
        $string[] = $pattern[$each - 1];
    }
    $string[] = 9;

    $return = implode('', $string);
    return str_replace(' ', '', $return);
}
/**
 * decemal => 3 based
 * 0        => 00000000
 * 1        => 00000001
 * 2        => 00000002
 * 3        => 00000010

 * 8        => 00000022
 * 9        => 00000100
 *
 * 6560 => 22222222
 */
function dec2base($num, $base)
{
    $ext = getExt($num, $base);

    $return = '';
    while($ext > 0) {
        $multiple = intval($num / pow($base, $ext));
        $return .= $multiple;
        $num -= $multiple * pow($base, $ext);
        $ext--;
    }
    $return .= $num;

    return $return;
}

function getExt($num, $base) {
    $ext = 0;
    for ($i=0; $i < 10; $i++) {
        if ($num >= pow($base, $i) && $num < pow($base, $i+1)) {
            $ext = $i;
            break;
        }
    }
    return $ext;
}

function calculateString($string)
{
    
}

function assertEqual($a, $b) {
    if ($a != $b) {
        throw new LogicException("$a is not equal to $b");
    }
}

assertEqual(getExt(0, 3), 0);
assertEqual(getExt(4, 3), 1);
assertEqual(getExt(6, 3), 1);
assertEqual(getExt(9, 3), 2);
assertEqual(getExt(10, 3), 2);
assertEqual(getExt(12, 3), 2);
assertEqual(getExt(27, 3), 3);

assertEqual(dec2base(0, 3), 0);
assertEqual(dec2base(1, 3), 1);
assertEqual(dec2base(2, 3), 2);
assertEqual(dec2base(3, 3), 10);
assertEqual(dec2base(4, 3), 11);
assertEqual(dec2base(5, 3), 12);
assertEqual(dec2base(6, 3), 20);
assertEqual(dec2base(7, 3), 21);
assertEqual(dec2base(8, 3), 22);
assertEqual(dec2base(9, 3), 100);
assertEqual(dec2base(27, 3), 1000);
assertEqual(dec2base(28, 3), 1001);

assertEqual(dec2base(6559, 3), 22222221);
assertEqual(dec2base(6560, 3), 22222222);

assertEqual(getString(0), '123456789');
assertEqual(getString(1), '12345678+9');
assertEqual(getString(2), '12345678-9');
assertEqual(getString(3), '1234567+89');
assertEqual(getString(6560), '1-2-3-4-5-6-7-8-9');