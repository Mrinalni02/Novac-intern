<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "validation";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
  $name = $lastname=  $phone = $companyname = $jobtitle = $email = $password= $gender = $message = "";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        
            $name=$_POST['name'];
            $lastname=$_POST['lastname'];
            $phone=$_POST['phone'];
            $companyname=$_POST['companyname'];
            $jobtitle=$_POST['jobtitle'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $gender=$_POST['gender'];
            $message=$_POST['message'];
         
  $sql = "INSERT INTO fill (name, lastname, phone, companyname, jobtitle, email,password,gender,message)
  VALUES ('$name', '$lastname','$phone', '$companyname', '$jobtitle', '$email', '$password','$gender','$message')";
  $conn->exec($sql);
  header("Location:submit.php");
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
   
    * {
  box-sizing: border-box;
  margin: 0;
  font-family: 'Manrope', sans-serif;
}
html {
  scroll-behavior: smooth;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
.header
{
  padding: 20px 0px;
  background: #fff;
}

.ots-banner {
  background-image: url(https://experience.novactech.in/selling_skills/assets/img/novac_ots/ots-banner.png);
  background-size: cover;
  background-position: center;
  height: 800px;

}

.ots-banner .header-logo {
  padding: 30px 0px;
}

.ots-banner .h-sec h2 {
  color: #fff;
  font-size: 34px;
  line-height: 50px;
}

.ots-banner .h-sec {
  width: 88%;
}

.ots-banner .h-sec span {
  font-size: 30px;
  color: #FDB811;
  font-weight: 600;
  letter-spacing: 1.5px;
}
/* .ots-banner .h-sec h2::after {
  content: "";
  height: 3px;
  background: #F89115;
  flex: 1;
  margin: 0.2em;
} */
.ots-banner h3 {
  display: flex;
  gap: 10px;
  color: #fff;
  font-size: 30px;
  align-items: center;
}
/* .ots-banner h3::before {
  content: "";
  height: 2px;
  background: #fdb811;
  flex: 1;
} */

.ots-banner .ots-area {
  display: grid;
  grid-template-columns: 35% 30% 35%;
  padding-top: 50px;
}

.ots-banner .ots-area h4 {
  width: 90%;
  font-size: 28px;
  color: #fff;
  padding-bottom: 31px;
  text-align: center;
  margin-left: 25px;
  font-weight: 500;
}

.ots-banner .ots-area .ots-sec {
  display: flex;
  align-items: center;
  gap: 20px;
  padding-bottom: 28px;
  justify-content: left;
}

.ots-banner .ots-area .ots-sec p {

  font-size: 20px;
  color: #fff;
  font-weight: 500;

}

.ots-banner .ots-area .ots-cont {
  padding-top: 50%;
}

.ots-banner .ots-area .ots-cont span {
  color: #FDB811;
}

.ots-banner .ots-area .ots-cont .ots-list {

  padding: 0px 50px;
}
.ots-banner .ots-area .form-right {
  background-color: #FFFFFF;
  padding: 10px;
}

.ots-banner .ots-area .form-right p {
  color: #000000;
  font-size: 20px;
  font-weight: 500;
  line-height: 26px;
  margin: auto;
  width: 70%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 15px;
}

.ots-banner .ots-area .form-right .fe-sec {
  display: grid;
  grid-template-columns: auto auto;
  gap: 20px;
}

.ots-banner .ots-area .form-right .f-form .fe-sec {
  padding: 12px 20px;
}


.ots-banner .ots-area .form-right .f-form .fe-sec .form-group .form-control {
  display: block;
  width: 100%;
  line-height: 1.5;
}

.ots-banner .ots-area .form-right .f-form .fe-sec .form-group .form-control {
  height: 48px !important;
  border-radius: 5px;
  font-size: 16px;
  padding-left: 15px;
  background: #EDF2F5;
}

.ots-banner .ots-area .form-right .f-form .fe-sec .form-group .form-control {
  border-color: rgb(255 255 255 / 0%);
  color: #808081;
}

.ots-banner .ots-area .form-right .fe-sec.cn {
  display: block;
  text-align: center;
}
.ots-banner .form-control:focus {
  outline: 0;
}

.ots-banner .btn-default {
  color: #fff;
  background-color: #F89115;
  border: none;
}

.ots-banner .btn-default:hover {
  color: #000;
  background: #999d9e;
}
.ots-banner .form-right .f-form .fe-sec .btn {
  display: inline-block;
  padding: 10px 40px;
  margin-bottom: 0;
  font-size: 18px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border-radius: 5px;
  text-decoration: none;
  width: 100%;
  margin: auto;
}
</style>



<body>
<section class="header">
  <div class="container">
    <div class="header-logo">
      <img src="https://experience.novactech.in/selling_skills/assets/img/novac_ots/Novac_Learning.png">
    </div>
    </div>
</section>

<section class="ots-banner">
    <div class="container">
      
      <div class="ots-area">
      <div class="h-sec">
        <h2>Upskill Your Team’s Selling Skills with Novac’s <span>OFF-THE-SHELF </span>Courses</h2>
      </div>

      
      <div class="ots-cont">
          <h4>Essential Sales Skills Course <span>Enhances</span></h4>
        <div class="ots-list">
          <div class="ots-sec">
            <img src="https://experience.novactech.in/selling_skills/assets/img/icons/o1.svg">
            <p>Selling Techniques</p>
          </div>
          <div class="ots-sec">
            <img src="https://experience.novactech.in/selling_skills/assets/img/icons/o2.svg">
            <p>Negotiation Skills</p>
          </div>
          <div class="ots-sec">
            <img src="https://experience.novactech.in/selling_skills/assets/img/icons/o3.svg">
            <p>Sales Strategies</p>
          </div>

          </div>
        </div>

        <div>
          <div class="form-right">
            <p>Tell us your queries we will get back to you shortly</p>


            <div class="f-form" >
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form" name="form">

                <div class="fe-sec">
                  <div class="form-group">
                    <input id="name" class="form-control" type="text" onkeyup="validateName()" name="name"
                     placeholder="First Name" value="<?php echo $name;?>">
                     <span id="nameErr" style="color: red;"></span>
                  </div>

                  <div class="form-group">
                    <input id="lastname" class="form-control" type="text" onkeyup="validateLastname()"
                     name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
                     <span id="lnameErr" style="color: red;"></span>
                  </div>
                </div>
                <div class="fe-sec cn">
                  <div class="form-group">
                    <input class="form-control" name="phone" type="text" id="phone"  onkeyup="validatePhone()"
                     minlength="1" maxlength="15" placeholder="Contact No" value="<?php echo $phone;?>">
                     <span id="phoneErr" style="color: red;"></span>
                  </div>


                </div>
                <div class="fe-sec">
                  <div class="form-group">
                    <input id="companyname" class="form-control" type="text"  name="companyname"
                      placeholder="Company Name" value="<?php echo $companyname;?>">
                  </div>

                  <div class="form-group">
                    <input id="jobtitle" class="form-control" type="text" name="jobtitle" placeholder="Job Title" 
                    value="<?php echo $jobtitle;?>">
                  </div>
                </div>
                <div class="fe-sec">
                  <div class="form-group">
                    <input id="email" class="form-control" type="email"  onkeyup="validateEmail()"
                     name="email" placeholder="Email" value="<?php echo $email;?>">
                     <span id="emailErr" style="color: red;"></span>
                  </div>

                  <div class="form-group">
                    <input id="password" class="form-control" type="password"  onkeyup="validatePassword()" 
                    name="password" placeholder="Password"  value="<?php echo $password;?>">
                      <span id="passwordErr" style="color: red;"></span>
                  </div>
                </div>
                <div class="fe-sec cn">
                  <div class="form-group">
                   <select class="form-control" id="gender"  onchange="validateGender()" name="gender" value="<?php echo $gender;?>">
                   <option value="">Select</option>
                   <option value="male">Male</option>
                   <option value="female">Female</option>
                   <option value="other">Other</option>

                    </select>
                    <span id="genderErr" style="color: red;"></span>
                  </div>

                </div>

                <div class="fe-sec cn">
                  <div class="form-group">
                    <input id="message" class="form-control text-area" type="text" name="message" placeholder="Message" 
                    value="<?php echo $message;?>">

                    </select>
                  </div>

                </div>


                

                <div class="fe-sec cn">
                  <button type="submit" name="submit" id="submit" class="btn btn-default">SUBMIT </button>
                </div>

            </div>

            </form>
          </div>
        </div>
      </div>


    </div>
    <script src="validation.js"></script>
</body>
</html>