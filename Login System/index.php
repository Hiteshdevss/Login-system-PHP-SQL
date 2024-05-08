<?php require './partials/_dbcon.php'?>

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
  <?php './login.php'
  
    echo $name.'';
  ?>
    <h1 class="text-3xl font-bold text-white mb-8 mt-20">Welcome to I-Sign</h1> 
</div>
</body>
</html>