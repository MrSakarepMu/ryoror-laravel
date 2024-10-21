<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-4">Login</h1>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
        <input type="text" id="username" name="username" class="border rounded py-2 px-3 w-full" placeholder="Enter your username">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" class="border rounded py-2 px-3 w-full" placeholder="Enter your password">
      </div>
      <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded w-full">Login</button>
    </form>
    <div class="mt-4 text-center">
      <a href="signup.html" class="text-blue-500 hover:text-blue-600">Don't have an account? Sign up</a>
    </div>
  </div>
</body>
</html>