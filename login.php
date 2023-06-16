<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,orange,cyan);
        }

        div {
            background-color: rgba(0, 0, 0,0.10);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        #entrar {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 40px;
            cursor: pointer; /* Adicionando efeito de mãozinha ao cursor */
            animation: neon-border 2s infinite;
        }

        @keyframes neon-border {
            0% {
                border-color: #ff00ff;
            }
            50% {
                border-color: #ff00ff;
            }
            100% {
                border-color: #ff00ff;
            }
        }
    </style>
</head>
<body>
    <center>
        <div>
            <h1>LOGIN</h1>
            <form id="login" action="logado.php" method="POST">
                Login: <input type="text" name="login" required><br><br>
                Senha: <input type="password" name="senha" required><br><br>
                <input type="submit" id="entrar" value="Entrar">
            </form>
        </div>
    </center>
</body>
</html>
