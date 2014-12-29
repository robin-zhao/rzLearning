<?php

$uploads_dir = DOC_ROOT . '/' . IMAGES;
if ($_FILES["folder"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["folder"]["tmp_name"];
    $name = $_FILES["folder"]["name"];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

    $gallery = new Gallery(DB::getInstance());
    $gallery->addImage(basename($name, '.jpg'));


    echo "<h1>Upload successful, back to site in 3 seconds.</h1>";

    echo '<script>setTimeout(function(){window.location.href="/";}, 3000);</script>';

} else {
    echo "<h1>Opps...Something wrong happened, please try later.</h1>";
}
