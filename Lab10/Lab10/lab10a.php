<html>
<head></head>
<body>

<h1>User inforamtion</h1>


<?php
$dsn = 'mysql:dbname=lab10;host=localhost;charset=UTF8';
$dbuser = 'root';
$dbpwd = 'P@$$w0rd';

function dbconnect() {
  try {
    global $dsn, $dbuser, $dbpwd;
    $pdo = new PDO($dsn, $dbuser, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die('Database Error');
  }
}
$conn = dbconnect();
echo "database Connected successfully </br>";
    try {
       $sql =  "SELECT * FROM user where username = :username AND password = :password";
        echo $sql ."</br>";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();  
        $numFound = $stmt->rowCount();
        if ($numFound  > 0) {
            // output data of each row
            while($row = $stmt->fetch()) {
                echo "User id: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Age: " . $row["age"]."<br>";
            }
        } else {
            echo "0 results found";
        }    
    }catch (PDOException $e) {
        die($e->getMessage());
    }
?>

</body>
</html>