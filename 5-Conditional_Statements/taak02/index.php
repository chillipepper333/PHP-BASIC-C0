<!DOCTYPE html>
<html>
<body>
<ul>
<?php
$test1 = 10;
$test2 = 6;
if($test1 == $test2) {
    echo  "<li>gelijk</li>";
    echo var_dump($test1 == $test2);
}
if($test1 != $test2) {
    echo "<li>ongelijk</li>";
    echo var_dump($test1 != $test2);
}
if($test1 === $test2) {
    echo "<li>identiek<li>";
    echo var_dump($test1 === $test2);
}
if($test1 > $test2) {
    echo "<li>test1 is groter dan test2</li>";
    echo var_dump($test1 > $test2);
}
if($test1 < $test2) {
    echo "<li>test1 is kleiner dan test2</li>";
    echo var_dump($test1 < $test2);
}
if($test1 >= $test2) {
    echo "<li>test1 is groter of gelijk aan test2</li>";
    echo var_dump($test1 >= $test2);
}
if($test1 <= $test2) {
    echo "<li>test 1 is kleiner of gelijk aan test2</li>";
    echo var_dump($test1 <= $test2);
}
?>
</ul>
</body>
</html> 