<?php

function render($templateName, stdClass $data)
{
    $return = '';
    ob_start();
    require TPL . '/' . $templateName . '.php';
    $return = ob_get_contents();
    ob_end_clean();
    return $return;
}
