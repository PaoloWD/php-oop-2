<?php
include_once __DIR__ . "./Prodotto.php";

class Categoria extends Prodotto{
    protected $category_name;
    protected $icon;
    protected $type;

    function __construct($_name, $_price, $_image, $_category_name, $_icon, $_type){
        parent::__construct($_name, $_price, $_image);
        $this->setCategory_name($_category_name);
        $this->setIcon($_icon);
        $this->setType($_type);
    }

    public function getCategory_name()
    {
        return $this->category_name;
    }

    public function setCategory_name($category_name)
    {
        $this->category_name = $category_name;

        return $this;
    }

    public function getIcon()
    {
        if($this->type === "Cane"){

            return "fa-solid fa-dog";
        } else{
            return "fa-solid fa-cat";
        }
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}