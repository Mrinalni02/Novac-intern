<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";

// $name;
// $email;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_GET['editid']))
{
    $id = $_GET['editid'];
    //print_r ($id);
   // $query = "UPDATE"
    $query = "SELECT * FROM new_pdo WHERE id=:key ";
    $stmt = $conn->prepare($query);
    $data = [':key' => $id];
    $stmt->execute($data);
    //$sql = "UPDATE new_pdo SET name=':name', email=':email' WHERE id=:key";
    
   
   $result = $stmt->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
   //print_r($result);
}
}catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Edit & Update data into database using PHP PDO</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit & Update data into database using PDO in PHP
                            
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="view.php/" method="POST">

                            <input type="hidden" name="id" value="<?php echo $id; ?>" />

                            <div class="mb-3">
                                <label> Name</label>
                                <input type="text" name="name" value="<?php echo $result->name; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $result->email; ?>"  />
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
  </body>
</html>

  <!-- if(isset($_GET['id'])){
    //$id=$_GET['id'];
    echo "ID: " .$id;
    $sql="DELETE FROM new_pdo Where id= $id";
    // $stmt=$conn->prepare($sql);
    // $stmt->bindParam(':id',$id);
    // $stmt->execute();
    $conn->exec($sql);
    header('location:form.php');
  }else{
    echo "Invalid request.Missing record ID.";
  }
} catch(PDOException $e) {
  echo "Error:" . "<br>" . $e->getMessage();
}

$conn = null;
?> -->