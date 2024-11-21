<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Welcome to Student Portal</h1>
            <form action="login.php" method="post" class="space-y-4">
                <div>
                    <label for="username" class="block font-medium mb-2">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Enter your username" 
                        class="bg-gray-700 text-white px-4 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500" 
                        required 
                        aria-label="Enter your username">
                </div>
                <div>
                    <label for="password" class="block font-medium mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Enter your password" 
                        class="bg-gray-700 text-white px-4 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500" 
                        required 
                        aria-label="Enter your password">
                </div>
               
                <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-md w-full">
                    Login
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="#" class="text-purple-500 hover:text-purple-600">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
</html>
