<htm>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
$nameErr = $emailErr = $agreeErr = $websiteErr = "";
$name = $email = $agree = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(empty($_POST["name"])){
$nameErr="Nmae is required";
}else{
$name=test_input($_POST["name"]);
}

if(empty($_POST["email"])){
$emailErr="Email is required";
}else{
$email=test_input($_POST["email"]);
}
if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
if(empty($_POST["agree"])){
$agreeErr="Accept the condition";
}else{
$agree=test_input($_POST["agree"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Agree:<input type="checkbox" id="policy1" name="policy1" value="policy">
  <label for="vehicle1"> I agree to the terms and policies of the company,</label>
  <span class="error">* <?php echo $agreeErr;?></span>>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
  
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $agree;
?>

</body>
</html>