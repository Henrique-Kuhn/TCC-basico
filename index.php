<html>
    <title>Site</title>
    <body>
        <style>
            body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            }

            .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c2c2c;
            padding: 10px 20px;
            margin-top: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            border-radius:20px;
            margin: 20px auto;
            width:93%; 
            }

            .navbar a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s;
            }

            .navbar a:hover {
            background-color: #444444;
            border-radius: 5px;
            }

            .menu {
            display: flex;
            gap: 15px;
            }

            .login a {
            background-color:rgb(69, 69, 75);
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            }

            .login a:hover {
            background-color:rgb(63, 64, 66);
            }

            @media (max-width: 600px) {
            .menu {
            flex-direction: column;
            align-items: flex-start;
            }
            }

            .menu-container {
                display: flex;
                background-color: #2c2c2c;
                margin-top: 20px;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
                flex-grow: 1;
                height: calc(100vh - 120px); 
                width: 93%; 
                margin: 20px auto;
                
            }
            .menu-container h1{
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                height: 100%;
            }
            .msgentrada{
                margin-top: 20px; 
                background-color: #1e1e1e; 
                padding: 20px; 
                border-radius: 20px; 
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            }
            .img{
                max-width: 100%; 
                height: auto; 
                border-radius: 10px; 
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            }
            .mid h1 {
                font-size: 18px;
                margin: 10px;
                color: #ffffff;
                position: relative;
                text-align: center;
            }
            .mid {
                background-color: rgb(69, 69, 75);
                width: 20%;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px;
                margin: 0 auto; 
                transform: translateX(120px); 
            }

            }
        </style>
        <nav>
            <div class="navbar">
                <div class="login">
                <a href="base.php">Login</a>
                </div>
                <div class="mid">
                <h1>Nome do Site</h1>
                </div>
                <div class="menu">
                <a href="#home">Home</a>
                <a href="#ajuda">Ajuda</a>
                <a href="#sobre">Sobre</a>
                <a href="#contratar">Contratar</a>
                </div>
            </div>
        </nav>
        <div class="page">
            <div class="menu-container">
                <div style="text-align: center; width: 100%;">
                    
                    <div class="msgentrada" >
                        <h2>Bem-vindo ao nosso site!</h2>
                        <p>Texto introdutorio</p>
                        
                    </div><br>
                    <img src="example.jpg" alt="imagemex" class ="img">
                </div>

            </div>
        </div>
    </body>
</html>