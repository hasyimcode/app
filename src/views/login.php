<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form method="post" class="bg-white p-6 rounded shadow-md w-80">
        <h1 class="text-xl mb-4 text-center">Login</h1>
        <input type="text" name="username" placeholder="Username" class="w-full mb-2 p-2 border" required>
        <input type="password" name="password" placeholder="Password" class="w-full mb-4 p-2 border" required>
        <button class="w-full bg-blue-500 text-white p-2 rounded" type="submit">Login</button>
    </form>
</body>
</html>
