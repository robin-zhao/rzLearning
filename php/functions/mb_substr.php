<?php

$str = 'abcdefg';

$strAlien = 'a你好阿我也好';


echo substr($str, 0, 3);
echo '<br />';
echo strlen($str);
echo '<br />';

mb_internal_encoding("UTF-8");

echo mb_substr($strAlien, 0, 3);
echo '<br />';
echo mb_strlen($strAlien);
echo '<br />';




