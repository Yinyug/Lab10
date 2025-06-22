<html>
<head></head>
<body>
<?php

//Check if text key exist in $_POST
if (array_key_exists('name', $_POST)){
    
    //Check if the name input is empty or only contains Space
    if (strlen(trim($_POST['name'])) != 0){

        //Set the string if input is not empty or only contains Space
        $str = 'Hello ' . htmlspecialchars($_POST['name']) . ', how are you doing today?';

    } else  {    //If input is invalid
        $str = 'No empty input!';
    }
    
} else {  //Text key 'name' does not exist
    $str = 'Please input your name.';
}
?>

<h1><?=$str?></h1>

<form method="post" action="lab10b.php">
  <p>Name: <input type="text" name="name" /></p>
  <p><input type="submit" /></p>
</form>

</body>
</html>
