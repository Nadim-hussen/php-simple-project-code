<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>object oriented programming in php</title>
</head>
<body>
    <h1>Here is the workflow of object oriented programming</h1>
    <?php
    class Fruit{
        public $name;
        public $color;
       public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
       public function intro(){
        echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}";
        }
    }
    class Cherry extends Fruit{
        public function __construct($name,$color,$weight){
            $this->name = $name;
            $this->color =$color;
            $this->weight = $weight;
        }
        public function into(){
            echo "This is {$this->name} fruit and it's color is {$this->color} and i want {$this->weight} kg";
        }
    }

    $Cheery = new Cherry('cherry','red',2);
    $Cheery->into();
   
    
    ?>
</body>
</html>