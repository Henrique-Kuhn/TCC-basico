<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            width: 300px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #ffffff; 
        }
        .login-container input {
            width: 93%;
            padding: 10px;
            margin: 10px 0 10px;
            border: none; 
            border-radius: 4px;
            background-color: #2c2c2c; 
            color: #ffffff;
        }
        .login-container input::placeholder {
            color: #bbbbbb;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #333333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.5s;
        }
        .login-container button:hover {
            background-color: #555555; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit" style="background-color: #28a745; color: white;">Entrar</button>
        </form>
        <p style="text-align: center; margin-top: 10px; color: #ffffff;">
            Não tem uma conta? <a href="register.php" style="color: #28a745;">Cadastre-se</a>
        </p>
    </div>
</body>
</html>