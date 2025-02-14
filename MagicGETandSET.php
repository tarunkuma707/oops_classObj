<?php
class demo{
    private $data = [];

    public function __set($name,$value){
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if(!array_key_exists($name,$this->data)){
            return null;
        }
        return $this->data[$name];
    }

    public function getData(){
        return $this->data;
    }
}

$example = new demo();
echo $example->name=15;
print_r($example->getData());
?>