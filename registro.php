<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #121212; 
        .container {
            background: #1e1e1e; 
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); 
            width: 100%;
            max-width: 400px;
        }
    }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff; 
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ccc; 
        }
        input {
            width: 94%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #555; 
            border-radius: 5px;
            background-color: #333; 
            color: white; 
        }
        input::placeholder {
            color: #aaa; 
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745; 
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="login.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="(opcional)">

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirmar Senha:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <input type="submit" class ="btn" value="Cadastrar">
           
        </form>
    </div>
</body>
</html>
<?php
 
?>
