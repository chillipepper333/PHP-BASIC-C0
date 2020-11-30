<!DOCTYPE html>
<html>
<body>
<ul>
<?php
$games = array ("apex", "Minecraft", "Red Dead Redemption");
echo "<li>$games[0]</li><li>$games[1]</li><li>$games[2]</li>";
$games[1] = "rocket league";
echo "<li>$games[0]</li><li>$games[1]</li><li>$games[2]</li>";
?>
</ul>
</body>
</html> 