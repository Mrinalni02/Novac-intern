<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{
        color: #FF0000;
    }
</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nameErr = $emailErr  ="";
  $name = $email = "";
  $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    
      if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else if(preg_match($pattern, $_POST["email"])) {
      // print_r("asdasdasd");
      // $emailErr = "invalid required";
      $email = test_input($_POST["email"]);
    }else{
      
      $emailErr = "email invalid";
    }
     
  }
  if((!empty($_POST["name"])) && (!empty($_POST["email"]))&& empty($emailErr) ) {
       
  $sql = "INSERT INTO new_pdo (name, email)
  VALUES ('$name', '$email')";
  $conn->exec($sql);
  header("Location:submit.php");
  echo "<br>";
    }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
function test_input($data){
    $data= trim($data);
    $data = stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}


//$conn = null;
?>

<body>
    <h2>FORM using PDO</h2>
    <!-- <p><span class="error">*required field</span></p> -->
    <form action=""  method="post" >  
      Name: <input type="text" name="name" value=<?php echo $name;?> >
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="email" name="email" value=<?php echo $email;?>>
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form> 
</body>
</html>