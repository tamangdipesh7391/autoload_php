<?php 

namespace classes\Animal;

class animal{
    public function __construct()
    {
        echo "Animal is being initialized<br>";
    }
    
    public static function run()
    {
        echo "Animal is running<br>";
    }
}