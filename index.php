<html>
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

            .logo a {
            background-color:rgb(69, 69, 75);
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            }

            .logo a:hover {
            background-color:rgb(63, 64, 66);
            }

            @media (max-width: 600px) {
            .menu {
            flex-direction: column;
            align-items: flex-start;
            }
            }
        </style>

        <div class="navbar">
            <div class="logo">
            <a href="base.php">Login</a>
            </div>
            <div class="menu">
            <a href="#home">Home</a>
            <a href="#ajuda">Ajuda</a>
            <a href="#sobre">Sobre</a>
            <a href="#contratar">Contratar</a>
            </div>
        </div>
    </body>
</html>