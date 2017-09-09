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
        $massive = array(156,12,141,765,1241,4124,5623);
        foreach ($massive as $key => $value){
            echo "$value"."\n";
        }
        echo "<br />";
        print 'Посчитаем его';
        echo "<br />";

        function recurs ($massive){
            return count($massive);
        }
        $y=recurs ($massive);
        echo$y;
        ?>
    </div>
    <?php include ("blocks/footer.php");?>
</div>
</body>
</html>

