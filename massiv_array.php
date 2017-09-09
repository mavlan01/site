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
        $massive = array(156,12,141,765,125);
        foreach ($massive as $key => $value){
            echo "$value"."\n";
        }
        echo "<br />";
        print 'А теперь перевернем его';
        echo "<br />";
        foreach (array_reverse($massive) as $key => $value){
            echo "$value"."\n";
        }
        ?>
    </div>
    <?php include ("blocks/footer.php");?>

</div>
</body>
</html>

