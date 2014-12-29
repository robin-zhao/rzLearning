<?php

require __DIR__ . '/config.php';
require LIBS. '/functions.php';
require LIBS . '/DB.php';
require LIBS . '/Image.php';
require LIBS . '/Gallery.php';

$query = '';
if (isset($_GET['q'])) {
    $query = $_GET['q'];
}

// Sole entry point + mini routing + mini controller
$data = new stdClass();
$gallery = new Gallery(DB::getInstance());
$galleryData = new stdClass();
switch ($query)
{
    case '':
        $galleryData->images = $gallery->getImages(false, 6);
        $data->body = render('index', $galleryData);
        break;
    case 'gallery':
        $galleryData->images = $gallery->getImages(false);
        $data->body = render('gallery', $galleryData);
        break;
    case 'upload':
        $galleryData->images = $gallery->getImages(false, 6);
        $data->body = render('upload', $galleryData);
        break;
    case 'sort':
        $gallery = new Gallery(DB::getInstance());
        $galleryData = new stdClass();

        $desc = $_GET['sort'] == 1 ? false : true;

        $galleryData->images = $gallery->getImages($desc);
        echo render('image-list', $galleryData);
        exit();
    case 'file-upload':
        require LIBS . '/upload.php';
        exit();
    default:
        header("HTTP/1.1 404 Not Found!");
        $data->body = render('404', $data);
}

echo render('layout', $data);
