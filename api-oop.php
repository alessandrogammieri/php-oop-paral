<?php

    class Para {
        public $x;
        public $y;
        public $z;

        public function __construct($x, $y, $z) {
            $this -> x = $x;
            $this -> y = $y;
            $this -> z = $z;
        }

        public function getArea() {
            $area = 2 * ($this -> x * $this -> y + $this -> x * $this -> z + $this -> y * $this -> z);
            return $area;
        }
        public function getVolume() {
            $volume = $this -> x * $this -> y * $this -> z;
            return $volume;
        }
    };

    $paral = [
        new Para(3, 4, 5),
        new Para(2, 2, 2),
        new Para(7, 7, 3)
    ];

    $sumArea = 0;
    $sumVolume = 0;
    foreach ($paral as $para) {
        echo "Parallelepipedo: " . $para -> x . " x " . $para -> y . $para -> z . "<br>";
        echo "Area: " . $para -> getArea() . "<br>";
        echo "Volume: " . $para -> getVolume() . "<br><br>";

        $sumArea += $para -> getArea();
        $sumVolume += $para -> getVolume();
    }

    echo "<br>Sum Area: " . $sumArea . "<br>";
    echo "Sum per: " . $sumVolume;

?>