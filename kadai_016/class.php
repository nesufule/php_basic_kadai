<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>
<body>
    <p>
        <?php

        class Food{
            private $name;
            private $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price . '<br>';
            }
        }

        class Animal{
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height . '<br>';
            }
        }

        $banana = new Food('banana', 100);
            print_r($banana);
            echo '<br>';

        $cat = new Animal('cat', 30, 5000);
            print_r($cat);
            echo '<br>';

        $banana->show_price();
        $cat->show_height();
        
        ?>
    </p>
</body>
</html>