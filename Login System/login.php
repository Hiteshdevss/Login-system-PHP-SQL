<?php
require './partials/_dbcon.php';

// Start session
session_start();

$error = ""; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare SQL statement with placeholders to prevent SQL injection
        $sql = "SELECT * FROM userdata WHERE email = ? AND password = ?";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        // Check if preparation was successful
        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Get result
            $result = mysqli_stmt_get_result($stmt);
            // Check if query returned any rows
            $num = mysqli_num_rows($result);

            if ($num == 1) {
                // Authentication successful, set session variables and redirect
                $_SESSION['email'] = $email;
                // Optionally, you can set more session variables here
                
                // Redirect to a welcome page or dashboard
                header("Location: ./index.php");
                exit();
            } else {
                // Authentication failed, display error message
                $error = "Invalid email or password";
            }
        } else {
            // Handle preparation error
            $error = "Error preparing statement: " . mysqli_error($conn);
        }
    } else {
        // POST variables not set, handle error
        $error = "Email and password are required";
    }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
<?php require 'partials/_nav.php'?>
<div class="flex flex-col justify-center items-center">
<h1 class="text-3xl font-bold text-white mb-8 mt-20">Login Here to access</h1> 
<div class="h-auto w-96 bg-gray-800 border border-white rounded-lg hover:shadow-lg hover:shadow-green-500/50">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="lg:w-full md:w-2/3 mx-auto p-5">
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full">
            <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-400">EMAIL</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
            <div class="p-2 w-full">
            <div class="relative">
                <label for="password" class="leading-7 text-sm text-gray-400">PASSWORD</label>
                <input type="password" id="password" name="password" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>

            <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-500 rounded text-lg hover:shadow-lg hover:shadow-green-500/50">Login</button>
            </div>
            
        </div>
        </div>
    </form>
    </div>
    <?php
    // Display error message if authentication failed
    if (!empty($error)) {
        echo "<p class='text-red-500'>$error</p>";
    }
    ?>
</div>
</body>
</html>
