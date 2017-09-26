<form action="" method="get">
    Введите имя кота: <input type="text" name="name">
    <input type="submit" name="button">
</form>
<?php
class Animal{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

}
class Cat extends Animal{
    public function meow(){
        return "Cat {$this->getName()} is saying meow";
    }
}

if(!empty($_GET)) {
    if (isset($_GET['name'])) {
        $nameCat = $_GET['name'];
        $cat = new Cat($nameCat);

        if ($cat->getName() === 'garfield') {
            echo "true<br>";
        } else {
            echo "Cat's name is  {$cat->getName()}<br>";
        }
        if ($cat->meow() === 'Cat garfield is saying meow') {
            echo "true<br>";
        } else {
            echo "Cat {$cat->getName()} is saying meow <br>";
        }
    }
}
?>

