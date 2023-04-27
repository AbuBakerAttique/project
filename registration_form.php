<?php
// Establish database connection

include "database_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $carname = $_POST['carname'];
  $carno = $_POST['carno'];
  $carcolor = $_POST['carcolour'];
  $phone = $_POST['phone'];
  print_r($_POST);
  $sql = "INSERT INTO registration (vehicle_no, first_name, last_name, phone_no, vehicle_name, vehicle_colour) VALUES ("+$carno+",'"+$fname+"','"+$lname+"','"+$phone+"','"+$carname+"','"+$carcolor+"')";
  if($conn->query($sql) == TRUE){
    echo "Inserted";
  } else{
    echo "Not Inserted";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      background-image: url('car.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .login-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.7);      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
    }

    .input-field {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .submit-button {
      background-color: #011802;
      display: block;
      margin: 0 auto;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .submit-button:hover {
      background-color: #45a049;
    }
   

  </style>
</head>
<body>
  <div class="login-form">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <h1>Registration Form</h1>
      <label for="firstname"> First Name:</label>
      <input type="text" id="firstname" name="firstname" class="input-field" placeholder="First Name">
      <label for="lastname"> Last Name:</label>
      <input type="text" id="lastname" name="lastname" class="input-field" placeholder="Last name">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" class="input-field" placeholder="Enter your phone number">
      <label for="carname"> Vehicle Name:</label>
      <input type="text" id="carname" name="carname" class="input-field" placeholder="Enter your Vehicle Name">
      <label for="carname"> Vehicle Number:</label>
      <input type="number" id="carno" name="carno" class="input-field" placeholder="Enter your Vehicle No">
      <label for="carname"> Vehicle Colour:</label>
      <input type="text" id="carcolour" name="carcolour" class="input-field" placeholder="Enter your Vehicle colour">
      <button type="submit" name='register' class="submit-button">Register</button>
    </form>
  </div>

  <script>
    // Array of image URLs
    const images = [
      'car.jpg',
      'car2.jpg',
      'car3.jpg'
    ];

    // Function to change the background image every minute
    setInterval(() => {
      const randomIndex = Math.floor(Math.random() * images.length);
      document.body.style.backgroundImage = `url(${images[randomIndex]})`;
    }, 60000);
  </script>
</body>
</html>
