<hmtl>
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
  <h2></h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Edit</th>
</tr>
</thead>
<tr>
  <tbody>

 <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";



try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT id,name,email FROM new_pdo";
  $stmt= $conn->prepare($sql);
  $stmt->execute();

  //echo "<ul>";
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>" .$row['id']. "</td>";
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['email']. "</td>";
    echo "<td>";
     echo "<a href='delete.php?deleteid=" .$row['id'] ." '><button>Delete</button></a>";
     echo "</td>";
     echo "<td>";
     echo "<a href='edit.php?editid=" .$row['id'] ." '><button>Edit</button></a>";
     echo "</td>";
    echo "</tr>";
    // echo "Name:" .$row['name'] . ",Email: " . $row['email'] . ";
    // <a href='delete.php?deleteid=" .$row['id'] .">Delete</a></li>";
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
}}catch(PDOException $e){
  echo "error fetching data: " . $e->getMessage();
}

$conn=null;
?>

<table style="width:50%">
</table>
<br>

<form action="form.php"  method="post" >  

      <input type="submit" name="add" value="ADD NEW DETAILS">  
    </form>
</body>
</html>