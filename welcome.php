<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php'); 
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#e6e0d4] min-h-screen flex flex-col items-center justify-center p-6">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p class="mt-4 text-lg">You have successfully logged in.</p>
        <a href="logout.php" class="mt-6 inline-block px-4 py-2 bg-red-500 text-white rounded">
            Logout
        </a>
    </div>
</body>
</html>