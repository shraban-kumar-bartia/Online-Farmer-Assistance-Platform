<?php
// Replace these values with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Password and confirm password do not match!";
    } else {
        // Simple SQL query to insert new user into the users table
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Signup successful!"); window.location.replace("index.html");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
        <style>
    body {
        font-family: 'Helvetica', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-transform: capitalize;
        background-image: url("image/pic-4.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        /* overflow: hidden; */
    }
  .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #15151681;
  transition: opacity 0.75s, visibility 0.75s;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 75px;
  height: 75px;
  border: 8px solid #dddddd00;
  border-top-color: #4278f4;
  border-right-color: #4278f4;
  border-bottom-color: #4278f4;
  border-radius: 50%;
  animation: loading 0.75s linear infinite;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}

    form {
        max-width: 500px;
        margin: 40px auto;
        background: #ffffff66;
        padding: 30px 70px;
        border-radius: 70px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        font-size: 44px;
    color: rgb(16, 137, 211);
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 13px;
        margin: 10px 0;
        font-size: 16px;
        border: 1px solid #5daef1;
        border-radius: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        display: block;
    width: 100%;
    font-weight: bold;
    background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
    color: white;
    padding-block: 15px;
    margin: 20px auto;
    border-radius: 20px;
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
    border: none;
    transition: all 0.2s ease-in-out;
    }

    input[type="submit"]:hover{
        transform: scale(1.03);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    input[type="submit"]:active{
        transform: scale(1.03);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    p {
        color: #ffff;
        margin-top: 15px;
        font-size: 14px;
        text-align: center;
    }

    a {
        font-size: 20px;
    color: rgb(16, 137, 211);
        text-decoration: none;
        text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
        
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="loader"></div>
    <form method="post" action="" class="login-form-container">
        <h3>Signup</h3>
        <div class="box-container">
            <div class="box">
                <input type="email" name="email" class="box" placeholder="Enter your email" required>
            </div>
            <div class="box">
                <input type="password" name="password" class="box" placeholder="Enter your password" required>
            </div>
            <div class="box">
                <input type="password" name="confirm_password" class="box" placeholder="Confirm your password" required>
            </div>
            <div class="box">
                <input type="submit" value="Signup now" class="btn">
            </div>
            <p>Already have an account? <a href="html/login.html">Login here</a></p>
        </div>
    </form>
</body>
<script>
    window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

</script>
</html>
