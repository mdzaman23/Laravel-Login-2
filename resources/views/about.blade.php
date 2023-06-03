<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="icon" href="images/1.png" type="image/gif/png">
    <style media="screen">

      div{
        border: 2px solid black;
        width: 500px;
        padding: 20px;
        margin-left: 400px;
        margin-top: 40px;
      }
      #firstname,#lastname,#number,#email,#password{
        width: 300px;
        padding: 5px;
        margin-top: 5px;
      }
      label{
        font-weight: bold;
        font-size: 18px;
      }
      form{
        margin-left: 30px;
      }
      #submit{
        margin-left: 100px;
        width: 150px;
        padding: 6px;
        font-size: 18px;
        font-weight: bold;
        background-color: blue;
        color: white;
        border-radius: 20px;
        border: 1px solid blue;
      }

    </style>
  </head>
  <body>
    <div>
      <form class="" action="registration form.php" method="post">
        <label for="">First Name</label><br>
        <input id="firstname" type="text" name="firstname" value="" placeholder="Enter Your First Name" required>
        <br>
        <br>
        <label for="">Last Name</label><br>
        <input id="lastname" type="text" name="lastname" value="" placeholder="Enter Your Last Name" required><br><br>
        <label for="">Phone Number</label><br>
        <input id="number" type="number" name="phonenumber" value="" placeholder="Enter your Phone Number" required><br><br>
        <label for="">Email</label><br>
        <input id="email" type="email" name="email" value="" placeholder="Enter Your Email" required><br><br>
        <label for="">Set Password</label><br>
        <input id="password" type="password" name="password" value="" placeholder="Set a Password" required><br><br>


        <input id="submit" type="submit" name="submit" value="Submit"><br>
      </form>
    </div>
    <?php
    $host="localhost:3306";
    $user="root";
    $pass="180238";
    $db="z_new_database";

    $conn=mysqli_connect($host,$user,$pass,$db);

    if (isset($_POST['submit'])) {
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $phonenumber=$_POST['phonenumber'];
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql="INSERT INTO register(First_Name,Last_Name,Phone_Number,Email,Password)
       values('$firstname','$lastname','$phonenumber','$email','$password')";
       $query=mysqli_query($conn,$sql);
       if ($query) {
         ?>
            <script type="text/javascript">
              alert('Successfully Registered');

            </script>
         <?php
         // code...
       }
    }

     ?>

  </body>
</html>
