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
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(1, 0, 0, 0.5);
            width: 400px;
            font-size: 20px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #ffffff; 
        }
        .login-container input {
            width: 95%; 
            padding: 15px; 
            margin: 15px 0 15px;
            border: none; 
            border-radius: 4px;
            background-color: #2c2c2c; 
            color: #ffffff;
        }
        .login-container input::placeholder {
            color: #bbbbbb;
            font-size: 16px;
            
        }
        .login-container button {
            width: 100%;
            padding: 15px; 
            background-color: #333333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.5s;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #555555; 
        }
        .registro{
            color: #28a745; 
            text-decoration: none;
        }
        h3{
            position:absolute;
            color:white;
            display:flex;
            align-items:flex-start;
            justify-content:center;
            top: 90px;
        }
    </style>
</head>
<body>

<?php   


$_senha = $_POST["password"];
$_csenha = $_POST["confirm_password"];


if( $_senha == $_csenha){

echo "<h3>cadastro realizado com sucesso</h3>";

echo "<div class='login-container'>
<h1>Login</h1>
<form action='index.php' method='POST'>
    <input type='text' name='username' placeholder='Usuário ou Email' required>
    <input type='password' name='password' placeholder='Senha' required>
    <button type='submit' style='background-color: #28a745; color: white;'>Entrar</button>
</form>
<p style='text-align: center; margin-top: 10px; color: #ffffff;'>
    Não tem uma conta? <a href='registro.php' class='registro' >Cadastre-se</a>
</p>
</div>";

}
else{
    echo "<h3>Senha não confere, por favor tente novamente</h3>";
}
?>

</body>
</html>