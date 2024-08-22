<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Klipaa | Login</title>

    <!-- Logo -->
    <link rel="shortcut icon" href="svg/L-Klipaa.svg" type="image/x-icon">

    <!-- Cdn | Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">


    
    <!-- Login -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="svg/L-Klipaa.svg" alt="Logo" class="w-24 h-24">
        </div>
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Masuk Akun Klipaa</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-medium mb-2">Username</label>
                <input type="email" id="email" placeholder="Masukan Email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 ease-in-out">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 font-medium mb-2">Password</label>
                <input type="password" id="password" placeholder="Masukan Password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 ease-in-out">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200 ease-in-out">
                Login
            </button>
            <div class="text-center mb-4">
                <a href="/reset" class="text-blue-600 hover:underline" style="position: relative; top: 10px">Reset
                    Password?</a>
            </div>
        </form>
    </div>
    <!-- End | Login -->



</body>

</html>