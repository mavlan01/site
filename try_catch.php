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
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            a:<input type="number" name="a">
            b:<input type="number" name="b">
            <input type="submit">
        </form>
        <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        try {

            if ($a < $b) {
                throw new Exception('a меньше b');
            } elseif ($a == $b) {
                throw new Exception('a равна b');
            } elseif ($a > $b){
                throw new Exception('a больше b');
            }
        }

        catch(Exception $ex) {

            echo $ex->getMessage();
        }
        ?>
    </div>
    <?php include ("blocks/footer.php");?>

</div>
</body>
</html>

