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
        $massive[1] = "42";
        $massive[2] = "15";
        $massive[3] = "12";
        $massive[4] = "62";
        $massive[5] = "52";
        echo "$massive[1] $massive[2] $massive[3] $massive[4] $massive[5]";
        echo "<br />";
        print 'А теперь перевернем его';
        echo "<br />";
        echo "$massive[5] $massive[4] $massive[3] $massive[2] $massive[1]";
        echo "<br />";
        ?>
    </div>
    <?php include ("blocks/footer.php");?>

</div>
</body>
</html>

