<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 12;
$test2 = 8;

if($test1 < 10 && $test2 > 5){
    echo "het getal zit tussen de 10 en de 5";
} else{
    echo "het getal is groter dan de 10 en de 5";
}

if($test1 < 10 || $test2 > 5){
    echo "een getal of beide getallen zitten tussen de 10 en de 5";
} else{
    echo "een getal of beide getallen zitten niet tussen de 10 en de 5";
}

if($test1 < 10 xor $test2 > 5){
    echo "een getal zit tussen de 10 en de 5 maar niet beide";
} else{
    echo "beide of geen getallen zitten tussen de 10 en de 5";
}

if(!$test1 < 10){
    echo "geen getal zit tussen de 10 en de 5";
} else{
    echo "het getal zit tussen de 10 en de 5";
}


?>
</body>
</html> 