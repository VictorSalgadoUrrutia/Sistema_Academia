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
            <h1 class="text-2xl font-bold mb-4 text-center">Inicio de Sesión</h1>
            <form method="post" class="space-y-4" action="models/process_login.php">
                <div>
                    <label for="username" class="block font-medium mb-2">Usuario</label>
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" class="bg-gray-700 text-white px-4 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500" aria-label="Enter your username" required>
                </div>
                <div>
                    <label for="password" class="block font-medium mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" class="bg-gray-700 text-white px-4 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500" aria-label="Enter your password" required>
                </div>
                <button name="btningresar" type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-md w-full">
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
