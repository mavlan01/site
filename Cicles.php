<!DOCTYPE html>
<html>
<head>
    <title>Мои таски</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container2">
    <?php include ("blocks/header.php");?>
    <?php include ("blocks/navigation.php");?>
    <?php include ("blocks/sidebar.php");?>

    <div id="tasks">
        <?php
        print 'Создадим массив';
        echo "<br />";
        $massive = array(0 =>156,1 =>12,2=>141,3=>765,4=>125);
        foreach ($massive as $key => $value){
            echo "$key => $value"."\n";
        }
        echo "<br />";
        echo 'А теперь посчитаем элементы массива';
        echo "<br />";
        echo 'С помощью цикла "for"';
        echo "<br />";
        for ($i=0; $i<count($massive);$i++)
        {
            echo "Элементов массива - $i"."<br>";
        }
        echo "<br />";
        echo 'С помощью цикла "while"';
        echo "<br />";
        $i=0 ;
        $elements=count($massive);
        while($i<$elements){
            echo "Элементов массива - $i"."<br>";
            $i++;
        }
        echo "<br />";
        echo 'С помощью цикла "do while"';
        echo "<br />";
        $i=0;
        $elements=count($massive);
        do{
            echo $i;
            $i++;
        } while($i<$elements);
        ?>
    </div>
    <?php include ("blocks/footer.php");?>

</div>
</body>
</html>

