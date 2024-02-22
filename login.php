<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 400px;
        max-width: 90%;
        text-align: center;
    }
    .login-container h2 {
        margin-bottom: 30px;
        color: #333;
    }
    .login-container form input[type="text"],
    .login-container form input[type="password"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .login-container form input[type="submit"] {
        width: calc(50% - 5px);
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 10px 0;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .login-container form input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .login-container form input[type="reset"] {
        width: calc(50% - 5px);
        background-color: #dc3545;
        border: none;
        color: #fff;
        padding: 10px 0;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .login-container form input[type="reset"]:hover {
        background-color: #c82333;
    }
    .login-container .home-link {
        margin-top: 20px;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        transition: color 0.3s ease;
    }
    .login-container .home-link:hover {
        color: #0056b3;
    }
</style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fas fa-user-lock"></i> LOGIN PENGGUNA</h2>
        <form action="proses-login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="kirim" value="Login">
            <input type="reset" name="kosongkan" value="Reset">
        </form><br><br>
        <a href="index.php" class="home-link">Back to Home</a>
    </div>
</body>
</html>
