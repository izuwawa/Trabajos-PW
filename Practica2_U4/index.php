<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Car{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "Mi carro es " .$this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car ("negro","Nissan");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car ("rojo","Toyota");
    echo $myCar -> message();
    ?>
</body>
</html>