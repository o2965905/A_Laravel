<?php

class Fruit{

    public $name;
    public $color;

    public function drop(){
        echo "$this->name 掉下來了<br>";
    }

}

/**
 * 1.蘋果 這個水果誕生了
 * 2.賦予蘋果 名稱跟顏色
 * 3.賦予蘋果 動作
 */

$appleObj=new Fruit; 
// dd($appleObj)
$appleObj->name='apple';
$appleObj->color='red';
$appleObj->drop();
// dd($appleObj)


?>