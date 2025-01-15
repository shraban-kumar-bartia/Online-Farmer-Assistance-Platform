<?php
// Replace these values with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_data";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        // Input credentials are empty, display alert message
        echo "<script>
                alert('Input credentials');
                window.location.href = 'login.html';
              </script>";
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, set session variables
        $_SESSION["email"] = $email;

        // Redirect to the specified URL
        $redirect = isset($_POST['redirect']) ? $_POST['redirect'] : 'main.php';
        header("Location: $redirect");
        exit();
    } else {
        // User not found, display alert message
        echo "<script>
                alert('Invalid credentials');
                window.location.href = 'signup.php';
              </script>";
        exit();
    }
}

$conn->close();
?>
