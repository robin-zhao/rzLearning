<?php

namespace BadExample{

    class Rectangle
    {
        private $width;
        private $height;

        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getWdith()
        {
            return $this->width;
        }
        public function getHeight()
        {
            return $this->heigth;
        }
        public function setHeight($height)
        {
            $this->height = $height;
        }
        public function setWidth($width)
        {
            $this->width = $width;
        }
    }
    class Square extends Rectangle
    {

        public function __construct($size)
        {
            parent::__construct($size, $size);
        }

        public function setHeight($height)
        {
            $this->height = $height;
            $this->width = $height;
        }
        public function setWidth($width)
        {
            $this->setHeight($width);
        }
    }

    function resize(Rectangle $rec)
    {
        while($rec->getWidth() > $rec->getHeight())
        {
            $rec->setWidth($rec->getWidth() - 1);
            $rec->setHeight($rec->getHeight() + 1);
        }
    }

    // in resize function, if we pass an square instance, the loop will never break,
    // So a substype cannot replace parent type, thus break LSB principle.


}

namespace GoodExample {

    class abstract FourEdgeShape
    {
        abstract public function getArea();
        abstract public function resize();
    }

    class Rectangle extends FourEdgeShape
    {
        // implements abstract methods...
    }

    class Square extends FourEdgeShape
    {
        // implements abstract methods...
    }

}



