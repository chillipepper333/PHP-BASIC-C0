<!DOCTYPE html>
<html>
<body>
<div id="isMeerderJarig">
        <?php
        $leeftijd = 18;
            if($leeftijd < 18 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
        }
        else{
            ($leeftijd >=18);
            echo "<h6>Je bent meerderjarig</h6>";
        }
        ?>
    </div>
</body>
</html> 