<?php
session_start();
?>
<html>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,orange,cyan);
        }

        div {
            background-color: rgba(0, 0, 0,0.9);
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
<body>
    <center>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
                <a href="cadastro.php">Cadastrar Usuário</a><br><br>
                <a href="listar.php">Listar Usuários</a><br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php">Alterar Senha</a><br>
            <a href="logout.php">Sair</a><br>
            <?php
        } else {
            ?>
            Olá, visitante. <a href="login.php">Login</a>
            <?php
        }
        ?>
    </center>
</body>
</html>
