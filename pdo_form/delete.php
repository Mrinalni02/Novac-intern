

<!-- <hmtl>
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body> -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    //echo "ID: " .$id;
    $sql="DELETE FROM new_pdo Where id= $id";
    // $stmt=$conn->prepare($sql);
    // $stmt->bindParam(':id',$id);
    // $stmt->execute();
    $conn->exec($sql);
    header('location:view.php');
  }else{
    echo "Invalid request.Missing record ID.";
  }
} catch(PDOException $e) {
  echo "Error:" . "<br>" . $e->getMessage();
}

$conn = null;
?>
