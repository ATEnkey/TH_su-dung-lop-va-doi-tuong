<?php
class Rectangle
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}
$rect = new Rectangle(5, 10);
echo $rect->getArea();
echo $rect->getPerimeter();
