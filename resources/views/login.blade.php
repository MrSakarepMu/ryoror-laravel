<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        #LoginForm {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);    
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ff3b3b;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #ff0000;
        }

        #LoginForm a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        #LoginForm a:hover {
            text-decoration: underline;
        }

        #LoginForm div:last-child {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form id="LoginForm">
        <h2>Login</h2>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
        <div>
            <span>Don't have an account?</span>
            <a href="e:\portofolio mk3\Signup.html">Sign up</a>
        </div>
    </form>
    <script src="asset/js/script.js"></script>
</body>
</html>
