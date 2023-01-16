<?php
class  Prodotto{
    protected string $name;
    protected $price;
    protected $image;

    function __construct($_name, $_price, $_image){
       $this->setName($_name);
       $this->setPrice($_price);
       $this->setImage($_image);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
