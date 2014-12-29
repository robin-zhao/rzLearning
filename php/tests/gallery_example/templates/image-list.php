<?php

foreach ($data->images as $image) :

    $obj = new stdClass();
    $obj->image = $image;

    echo render('image-row', $obj);
endforeach;
