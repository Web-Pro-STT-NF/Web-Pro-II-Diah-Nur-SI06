<?php

class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango';

?>

<?php

class Fruit
{
    public $name;
    public $color;
    public $weight;

    function set_name($n)
    { // a public function (Default)
        $this->name = $n;
    }
    protected function set_color($n)
    { // a protected function 
        $this->color = $n;
    }
    private function set_weight($n)
    { // a private function
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mango'; // ok
// error //$mango->color = 'Yellow';
// error // $mango->weight = '300';

?>