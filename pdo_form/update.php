 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $query = "Update new_pdo SET name=:name, email=:email WHERE id=:key";
 $stmt=$conn->prepare($query);
 $data=array(':key' => $_POST['id'], ':name' => $_POST['name'], ':email' => $_POST['email']);
 $stmt->execute($data);
 print_r($data);
}
catch(PDOException $e) {
  echo "Error:" . "<br>" . $e->getMessage();
  
}


?>
<form action="view.php" method="POST">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Field inserted successfully</h2>
  <br>
  <form method="post" action="view.php">
    <button type="submit" name="submit">Fill new</button>
</form>  
</body>
</html>