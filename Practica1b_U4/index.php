<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $arraynumerico=array(2,4,3,1,5,10,6,8,9,7);
    sort($arraynumerico);
    foreach($arraynumerico as $key=>$val){
    echo "array [$key]=$val <br>";}
    
    echo "<br>";
    $arrayfruta=array("fresa","naranja","platano","mango","sandia","pera","durazno","guayaba","ciruela","zanahoria");
    rsort($arrayfruta);
    foreach($arrayfruta as $key=>$val){
        echo "fruta[$key]=$val<br>";
    }
    ?>
    
</body>
</html>
        
    </body>
</html>
