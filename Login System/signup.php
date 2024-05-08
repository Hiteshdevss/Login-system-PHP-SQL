<?php
require './partials/_dbcon.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    // Check if passwords match
    if ($password !== $c_password) {
        echo "<h1 class='text-center text-2xl font-bold text-red-500'>Passwords do not match</h1>";
        exit(); // Exit script if passwords don't match
    }

    // Hash the password before storing it in the database (recommended for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement with placeholders to prevent SQL injection
    $sql = "INSERT INTO `userdata` (`name`, `password`, `email`, `tstamp`) VALUES (?, ?, ?, current_timestamp())";
    
    // Prepare and execute the statement
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $hashed_password, $email);
    $result = mysqli_stmt_execute($stmt);

    // if ($result) {
    //     echo "<h1 class='text-center text-2xl font-bold text-green-500 p-5 bg-white'>Registered Successfully</h1>";
    // } else {
    //     echo "<h1 class='text-center text-2xl font-bold text-red-500 p-5 bg-white'>Registration Failed</h1>";
    // }
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
<h1 class="text-3xl font-bold text-white mb-8 mt-20">Register Here to access</h1> 
<div class="h-auto w-96 bg-gray-800 border border-white rounded-lg hover:shadow-lg hover:shadow-green-500/50">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="lg:w-full md:w-2/3 mx-auto p-5">
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-400">NAME</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
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
            <div class="relative">
                <label for="c_password" class="leading-7 text-sm text-gray-400">CONFIRM PASSWORD</label>
                <input type="password" id="c_password" name="c_password" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>

            <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-500 rounded text-lg hover:shadow-lg hover:shadow-green-500/50">Register</button>
            </div>
            
        </div>
        </div>
    </form>
    </div>
</div>

</body>
</html>