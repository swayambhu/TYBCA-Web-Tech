<?php
    if($_REQUEST["name1"] || $_REQUEST["age1"]){
        echo "Welcome ".$_REQUEST['name1']."<br/>";
        echo "Your Age is " . $_REQUEST['age1'] ."<br/>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php $_php_self?>" method="post">
        Name : <input type="text" name="name1">
        Age  : <input type="text" name="age1">
        <input type="submit" value="submit">
</form>
</body>
</html>