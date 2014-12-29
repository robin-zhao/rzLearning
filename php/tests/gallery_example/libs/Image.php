<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author robin
 */
class Image
{

    private $name;
    private $note;
    private $uploaded;

    public function __construct($name, $note, $uploaded)
    {
        $this->name = $name;
        $this->note = $note;
        $this->uploaded = $uploaded;
    }

    public function getUrl()
    {
        return '/' . IMAGES . '/' . $this->name . '.jpg';
    }

    public function getThumbUrl()
    {
        $thumb = '/' . THUMBS . '/' . $this->name . '-thumb.jpg';

        if (!file_exists(DOC_ROOT .  $thumb)) {
            $thumb = '/assets/images/processing.jpg';
        }

        return $thumb;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function getName()
    {
        return $this->name;
    }
}