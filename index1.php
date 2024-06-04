<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php Practises </title>
</head>
<body>
    <form action="index1.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="burger" value="Burger">
        Burger <br>
        <input type="checkbox" name="apple" value="Apple">
        Apple <br>
        <input type="checkbox" name="pepsi" value="Pepsi">
        Pepsi <br>
        <input type="checkbox" name="friens_fry" value="Friens_fry">
        Friens Fry <br>
        <input type="submit" name="submit">
    </form>




</body>
</html>
<?php

if(isset($_POST["submit"])){
    
    if(isset($_POST["pizza"])){
        echo"You Like Pizza!<br>";
    }
    if(isset($_POST["burger"])){
        echo"You Like Burger!<br>";
    }
    if(isset($_POST["apple"])){
        echo"You Like Apple!<br>";
    }
    if(isset($_POST["pepsi"])){
        echo"You Like Pepsi!<br>";
    }
    if(isset($_POST["friens_fry"])){
        echo"You Like Friens Fry!<br>";
    }


    if(empty($_POST["pizza"])){
        echo"You Don't Like Pizza!<br>";
    }
    if(empty($_POST["burger"])){
        echo"You Don't Like Burger!<br>";
    }
    if(empty($_POST["apple"])){
        echo"You Don't Like Apple!<br>";
    }
    if(empty($_POST["pepsi"])){
        echo"You Don't Like Pepsi!<br>";
    }
    if(empty($_POST["friens_fry"])){
        echo"You Don't Like Friens Fry!<br>";
    }

}


?>