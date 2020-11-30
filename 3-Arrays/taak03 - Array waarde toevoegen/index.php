<!DOCTYPE html>
<html>
<body>
<ul>
<?php
$myheroes = array ("reeves", "spoederman", "botman");
$myheroes[3] = "bob ross";
array_push($myheroes, "<li>arcadum</li>");
echo "<li>$myheroes[0]</li><li>$myheroes[1]</li><li>$myheroes[2]</li><li>$myheroes[3]</li>";
?>
</ul>
</body>
</html> 