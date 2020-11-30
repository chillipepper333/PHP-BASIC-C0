<!DOCTYPE html>
<html>
<body>

<?php
$spatie = " ";
$getallen = array (676 ,5345 ,78657 , 3, 46, 21, 47);
asort($getallen);
foreach ($getallen as $laag_hoog){
    print_r ($laag_hoog);
}
echo $spatie;
arsort($getallen);
foreach($getallen as $hoog_laag){
    print_r ($hoog_laag);
}
?>

</body>
</html> 